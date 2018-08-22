<?php
require_once '../utilities/connection.php';
require_once '../utilities/randomgenerator.php';

$errors            = array();
$santa_reset_email = 'santa@santa.com';
$random_token      = randomize();

// Create a token and send it to the user via email
if ( isset( $_POST['send'] ) ) {

	$email = $_POST['email'];
	$msg   = 'Because you had some issues with your password, Santa will come and rescue the situation.' . "\r\n" . "\r\n" . ' Click on the following link to reset your password: ' . ' http://pixy.local/ssh/view/reset.php?token=' . $random_token . '&email=' . $email . ' .' . "\r\n" . "\r\n" . ' Have a jolly day!';
	$flag  = 0;

	if ( empty( $email ) ) {
		$errors[] = "Email is required at re-setting the password";
	}

	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[] = "Email is not properly written";
	}

	$multiple_users = $database->select( "users_db", [ "email" ] );
	foreach ( $multiple_users as $one_user ) {
		if ( $email == $one_user['email'] ) {
			$flag = 1;
			break;
		}
	}

	if ( count( $errors ) == 0 && 1 == $flag ) {
		$multiple_users = $database->select( "users_db", [ "email" ] );
		foreach ( $multiple_users as $one_user ) {
			if ( $email == $one_user['email'] ) {

				$database->update( 'users_db', [
					'token' => $random_token
				],
					[ "email" => $data['email'] ] );

				mail( $email, 'Santa gifted you something small, but important...', $msg, 'From: ' . $santa_reset_email );
				header( 'location: ../view/afterforgot.php' );
				exit();
			}
		}
	} else {
		$errors[] = "The user doesn't exist";}
}

