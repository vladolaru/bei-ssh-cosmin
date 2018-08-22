<?php

require_once '../utilities/connection.php';
require_once '../utilities/randomgenerator.php';

//Change the old password with a new one
if ( isset( $_POST['set'] ) ) {

	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$errors    = array();
	$email     = $_GET['email'];
	$token     = $_GET['token'];

	if ( empty( $password1 ) ) {
		 $errors[]="First password is not set" ;
	}

	if ( empty( $password2 ) ) {
		$errors[]="Second password is not set";
	}

	if ( $password1 != $password2 ) {
		$errors[]="Passwords do not match";
	}

	if ( count( $errors ) == 0 ) {
		$multiple_data = $database->select( "users_db", [ "email", "password", "token" ] );
		foreach ( $multiple_data as $one_data ) {
			if ( $email == $one_data['email'] && $token==$one_data['token'] ) {
				$database->update( "users_db", [
					"password" => password_hash($password1,PASSWORD_DEFAULT),
					"token" => rand(96578,456780)
				], [
					"email" => $email
				] );

				header( 'location: ../view/login.php' );
				exit;
			}
		}
	}
}

