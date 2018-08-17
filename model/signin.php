<?php

require_once 'connection.php';
session_start();

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
		$datas = $database->select( "users_db", [ "email", "password", "user_id" ] );
		foreach ( $datas as $data ) {
			if ( $email == $data['email'] && $password == $data['password'] && $user_id == $data['user_id'] ) {
				$_SESSION['email']   = $email;
				$_SESSION['success'] = "You are now logged in";
				header( 'location: ../view/persons.php' );
			}
		}
	}
	else {array_push( $errors, "The user doesn't exist" );}
}

