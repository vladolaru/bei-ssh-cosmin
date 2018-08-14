<?php

require_once 'connection.php';
session_start();

$email    = $_POST['email'];
$password = $_POST['password'];

// LOGIN USER
if ( isset( $_POST['login'] ) ) {


	if ( empty( $email ) ) {
		array_push( $errors, "Email is required at login" );
	}
	if ( empty( $password ) ) {
		array_push( $errors, "Password is required at login" );
	}

	if ( count( $errors ) == 0 ) {
		$datas = $database->select( "users_db", [ "email", "password" ] );
		foreach ( $datas as $data ) {
			if ( $email == $data['email'] && $password == $data['password'] ) {
				$_SESSION['email']   = $email;
				$_SESSION['success'] = "You are now logged in";
				header( 'location: ../view/persons.php' );
			} else {
				array_push( $errors, "The user doesn't exist" );
				header( 'location: ../view/login.php' );
			}
		}
	}
}

