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
	$person_id=
	$errors = array();
	$datas ='';
	$i=0;

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($first_name)) { array_push($errors, "First name is required"); }
	if (empty($last_name)) { array_push($errors, "Last name is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if ( null == filter_var( $email, FILTER_VALIDATE_EMAIL ) || false == filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		array_push($errors, "Email is not properly written"); }

	//daca emailul e egal cu cel actual

	$datas = $database->select("persons_db", [ "email", "first_name", "last_name" , "private_notes", "preferences"]);
	foreach($datas as $data){
	if ($email==$data['email'] && $first_name==$data['first_name'] && $last_name==$data['last_name'] && $private_notes==$data['private_notes'] && $preferences==$data['preferences'])
	{ array_push($errors, "No information was changed"); }}

	// Check if
	// a user does not already exist with the same email
	$datas = $database->select("persons_db", [ "email", "person_id", "first_name","last_name","preferences","private_notes" ]);
	foreach($datas as $data){
		if ($email==$data['email'] && $person_id!=$datas['person_id']) {
			$i=$i+1; //retinem cate emailuri mai sunt asa
		}
	}

	if($i>0){
		array_push($errors, "The user already exists");
	}


	/*foreach($datas as $data){
		if ($email==$data['email'] && $person_id==$datas['person_id'] && ()) {
			array_push() //atunci cand emailul e acelasi dar altceva a fost modificat
		}
	}*/



	// Finally, update if there are no errors in the form
	if (count($errors) == 0) {

		$database->update('persons_db', [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'preferences' => $preferences,
			'private_notes' => $private_notes,
		],[ "email[=]"=>$original]);


		header('location: ../view/persons.php');
		exit;
	}
}