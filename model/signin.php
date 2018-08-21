<?php
require_once '../utilities/connection.php';

// LOGIN USER
if ( isset( $_POST['login'] ) ) {

	$email    = $_POST['email'];
	$password = $_POST['password'];
	$errors   = array();
	$data     = array();

	if ( empty( $email ) ) {
		$errors[] = "Email is required at login";
	}
	if ( empty( $password ) ) {
		$errors[] = "Password is required at login";
	}

	if ( count( $errors ) == 0 ) {
		$data= $database->select( "users_db", '*', [ 'email' => $email ] );
		if ( empty( $data ) ) {
			$errors[] = "There is no user that has the email and password you have wrote. Please try again.";
		} else
			if ( true==password_verify($password,$data[0]['password']) ) {
			$data = $data[0];
			setcookie( 'first_name', $data['first_name'], time() + 3600, '/' );
			setcookie( 'user_id', $data['user_id'], time() + 3600, '/' );
			setcookie( 'email', $data['email'], time() + 3600, '/' );
			setcookie( 'password', $data['password'], time() + 3600, '/' );

			header( 'location: http://pixy.local/ssh/view/persons.php' );
			die;
		} else {
			$errors[] = "There is no user that has the email and password you have wrote. Please try again.";
		}
	}
}

