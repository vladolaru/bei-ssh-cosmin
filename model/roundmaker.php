<?php

require_once 'connection.php';
include '../utilities/SSHalgorithm.php';

session_start();

// START A NEW SSH ROUND
if (isset($_POST['send'])) {

	// initializing form variables
	$fromEmail=$_POST['fromEmail'];
	$titleEmail=$_POST['titleEmail'];
	$messageEmail=$_POST['messageEmail'];
	$budget = $_POST['budget'];

	//array of the desired participants
	$participants=array();
	array_push($participants,$_POST['participants']);

	//initializing script variables
	$errors = array();
	$datas ='';
	$flag=0;


	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($participants)) { array_push($errors, "Participants are required(more than 2)"); }
	if (empty($budget) || !is_numeric($budget)) { array_push($errors, "Budget is not properly written"); }
	if (empty($titleEmail)) { array_push($errors, "Email title is required"); }
	if (empty($fromEmail)) { array_push($errors, "The sender email is required"); }
	if (empty($messageEmail)) { array_push($errors, "The email message is required"); }
	if ( null == filter_var( $fromEmail, FILTER_VALIDATE_EMAIL ) || false == filter_var( $fromEmail, FILTER_VALIDATE_EMAIL ) ) {
		array_push($errors, "Email is not properly written"); }

	// first check the database to make sure
	// that all the participants exist
	$datas = $database->select("persons_db", [ "email" ]);
	foreach($datas as $data) {
		foreach ( $participants as $participant ) {
			if ( $participant == $data['email'] ) {
				$flag=1;
				break;
			}
		}
		if(0==$flag) {
			array_push( $errors, "$participant doesn't exist in our database, please add the person first" );
			break;
		}
	}



	// Finally, register user if there are no errors in the form
	if (0==count($errors) && 1==$flag) {

		$database->insert('rounds_db', [
			'budget' => $first_name,
			'participants_number' => count($participants),
			'date' => date('d/m/Y'),
		]);

		//aici includ algoritmul SSH


		header('location: ../view/roundhistory.php');
		exit;
	}
}