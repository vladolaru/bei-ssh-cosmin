<?php

require_once 'connection.php';

session_start();

// initializing variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$hashed_password=password_hash($password,PASSWORD_DEFAULT);
$errors_fields = array();
$errors_database = array();


// REGISTER USER
if (isset($_POST['register'])) {

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { array_push($errors_fields, "First name is required"); }
	if (empty($last_name)) { array_push($errors_fields, "Last name is required"); }
	if (empty($email)) { array_push($errors_fields, "Email is required"); }
	if (empty($password)) { array_push($errors_fields, "Password is required"); }


	// first check the database to make sure
	// a user does not already exist with the same username and/or email
	/*if(count($errors_database) != 0)
	{
		header('location: ../index.php');

	}*/

	// Finally, register user if there are no errors in the form
	if (count($errors_fields) == 0 && count($errors_database) == 0) {

		$database->insert('users_db', [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'password' => $password,
		]);


		$_SESSION['first_name'] = $first_name;
		$_SESSION['success'] = "You are now logged in";
		header('location: ../view/persons.php');
	}
}