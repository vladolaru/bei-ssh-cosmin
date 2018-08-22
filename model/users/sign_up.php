<?php

require_once '../utilities/connection.php';


// REGISTER USER
if (isset($_POST['register'])) {

	// initializing variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$errors = array();

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { $errors[]= "First name is required"; }
	if (empty($last_name)) { $errors[]="Last name is required"; }
	if (empty($email)) { $errors[]="Email is required"; }
	if (empty($password)) { $errors[]="Password is required"; }
	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[]="Email is not properly written"; }

		// first check the database to make sure
		// a user does not already exist with the same username and/or email
		$multiple_users = $database->select("users_db", [ "email" ]);
		foreach($multiple_users as $one_user){
			if ($email==$one_user['email']) {
			array_push($errors, "The user already exists");
			}
		}


	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {

		$database->insert('users_db', [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'password' => password_hash($password,PASSWORD_DEFAULT),
		]);


		header('location: ../view/login.php');
		exit;
	}
}