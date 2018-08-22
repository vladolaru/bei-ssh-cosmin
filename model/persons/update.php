<?php
require_once '../utilities/connection.php';

// MODIFY PERSON'S DETAILS
if (isset($_POST['save'])) {

	// initializing variables
	$person_id = $_GET['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email    = $_POST['email'];
	$preferences = $_POST['preferences'];
	$private_notes= $_POST['private_notes'];
	$errors = array();


	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { $errors[]= "First name is required"; }
	if (empty($last_name)) { $errors[]="Last name is required"; }
	if (empty($email)) { $errors[]="Email is required"; }
	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[]="Email is not properly written"; }


	// Check if
	// a user does not already exist with the same email
	$multiple_persons = $database->select("persons_db", '*');
	foreach($multiple_persons as $one_person) {
		if ( $email == $one_person['email'] && $person_id != $one_person['person_id']) {
			$errors[]="You cannot modify the email with an email of an already existent user from your list";
			break;
		}
	}

	// Finally, update if there are no errors in the form
	if (count($errors) == 0) {

		$database->update('persons_db', [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'preferences' => $preferences,
			'private_notes' => $private_notes,
		],[ "person_id[=]"=>$person_id]);


		header('location: ../view/persons.php');
		exit;
	}
}