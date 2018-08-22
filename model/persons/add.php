<?php

require_once '../utilities/connection.php';


// ADD PERSON'S DETAILS
if (isset($_POST['save'])) {

	// initializing variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email    = $_POST['email'];
	$preferences = $_POST['preferences'];
	$private_notes= $_POST['private_notes'];
	$errors = array();

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { $errors[]="First name is required"; }
	if (empty($last_name)) { $errors[]="Last name is required"; }
	if (empty($email)) { $errors[]="Email is required"; }
	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[]="Email is not properly written"; }

	// first check the database to make sure
	// a user does not already exist with the same username and/or email in this users list
	$multiple_persons = $database->select("persons_db", '*');
	foreach($multiple_persons as $one_person){
		if ($email==$one_person['email'] && $_COOKIE['user_id']==$one_person['user_id']) {
			$errors[]="The person already exists";
		}
	}


	// Finally, register user or update if there are no errors in the form
	if (count($errors) == 0) {

		$database->insert('persons_db', [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'preferences' => $preferences,
			'private_notes' => $private_notes,
			'user_id' => $_COOKIE['user_id'],
		]);


		header('location: ../view/persons.php');
		exit;
	}
}