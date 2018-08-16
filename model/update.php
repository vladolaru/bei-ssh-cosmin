<?php
require_once 'connection.php';


// MODIFY PERSON'S DETAILS
if (isset($_POST['save'])) {

	// initializing variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email    = $_POST['email'];
	$preferences = $_POST['preferences'];
	$private_notes= $_POST['private_notes'];
	$errors = array();
	$datas ='';

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { array_push($errors, "First name is required"); }
	if (empty($last_name)) { array_push($errors, "Last name is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }

	$datas = $database->select("persons_db", [ "email", "first_name", "last_name" , "private_notes", "preferences"]);
	foreach($datas as $data){
	if ($email==$data['email'] && $first_name==$data['first_name'] && $last_name==$data['last_name'] && $private_notes==$data['private_notes'] && $preferences==$data['preferences'])
	{ array_push($errors, "No information was changed"); }}

	// Check if
	// a user does not already exist with the same email
	$datas = $database->select("persons_db", [ "email" ]);
	foreach($datas as $data){
		if ($email==$data['email']) {
			array_push($errors, "The user already exists");
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
		],[
			 'email[=]'=>$email
		]);


		header('location: ../view/persons.php');
		exit;
	}
}