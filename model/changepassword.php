<?php

require_once 'connection.php';
require_once '../utilities/randomgenerator.php';

session_start();

$password1  = $_POST['password1'];
$password2  = $_POST['password2'];
$errors = array();
$datas='';

//Change the old password with a new one
if ( isset( $_POST['set'] ) ) {

	if ( empty( $password1 ) ) {
		array_push( $errors, "First password is not set" );
	}

	if ( empty( $password2 ) ) {
		array_push( $errors, "Second password is not set" );
	}

	if($password1!=$password2) {
		array_push( $errors, "Passwords do not match" );
	}


	if ( count( $errors ) == 0 ) {
		$datas = $database->select( "users_db", ["email", "password"] );
			if ( $email == $data['email'] ){
				header( 'location: ../view/afterforgot.php' );
				exit;
			} else {
				array_push( $errors, "The user doesn't exist" );
				header( 'location: ../view/reset.php' );
			}
		}
}

