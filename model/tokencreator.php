<?php
require_once 'connection.php';
require_once '../utilities/randomgenerator.php';

session_start();

$errors = array();
$datas='';
$santa_reset_email='santa@santa.com';
$random_token=randomize();

// Create a token and send it to the user via email
if ( isset( $_POST['send'] ) ) {

	$email = $_POST['email'];
	$msg   = 'Because you had some issues with your password, Santa will come and rescue the situation.' . "\r\n" . "\r\n" . ' Click on the following link to reset your password: ' . ' http://pixy.local/ssh/view/reset.php?=' . $random_token . '&&' . $email . ' .' . "\r\n" . "\r\n" . ' Have a jolly day!';


	if ( empty( $email ) ) {
		array_push( $errors, "Email is required at re-setting the password" );
	}

	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		array_push( $errors, "Email is not properly written" );
	}

	array_push( $errors, "The user doesn't exist" );

	if ( count( $errors ) == 1 ) {
		$datas = $database->select( "users_db", [ "email" ] );
		foreach ( $datas as $data ) {
			if ( $email == $data['email'] ) {
				mail( $email, 'Santa gifted you something small, but important...', $msg, 'From: ' . $santa_reset_email );
				header( 'location: ../view/afterforgot.php' );
				exit();
			}
		}
	}
}

