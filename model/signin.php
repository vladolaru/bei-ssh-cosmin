<?php

require_once 'connection.php';

// LOGIN USER
if ( isset( $_POST['login'] ) ) {

	$email    = $_POST['email'];
	$password = $_POST['password'];
	$errors   = array();

	if ( empty( $email ) ) {
		array_push( $errors, "Email is required at login" );
	}
	if ( empty( $password ) ) {
		array_push( $errors, "Password is required at login" );
	}

	if ( count( $errors ) == 0 ) {
		$datas = $database->select( "users_db", [ "email", "password", "user_id", "first_name" ] );
		foreach ( $datas as $data ) {
			if ( $email == $data['email'] && $password == $data['password'] ) {
				setcookie('first_name', $data['first_name'], time()+3600, '/');
				setcookie('user_id', $data['user_id'], time()+3600, '/');
				setcookie('email', $data['email'], time()+3600, '/');
				setcookie('password', $data['password'], time()+3600, '/');

				header( 'location: ../view/persons.php' );
				die;


			}
		}
	}
	else {array_push( $errors, "The user doesn't exist" );}
}

