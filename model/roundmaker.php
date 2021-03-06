<?php

require_once '../utilities/connection.php';
require_once '../utilities/SSHalgorithm.php';


// START A NEW SSH ROUND
if (isset($_POST['send'])) {

	// initializing form variables
	$fromEmail=$_POST['fromEmail'];
	$titleEmail=$_POST['titleEmail'];
	$messageEmail=$_POST['messageEmail'];
	$budget = $_POST['budget'];

	//initializing script variables
	$errors = array();
	$datas ='';
	$participants=array();


	foreach ($_POST['select'] as $selectedOption) {
		$persons = $database->select( "persons_db", [ "email", "first_name",],[ "email[=]"=>$selectedOption] );
		if ( ! empty( $persons[0] ) ) {
			$participants[] = $persons[0];
		}
		else {
			array_push( $errors, 'One or more participants are not in the database' );
		}
	}


	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (count($participants)<3) { array_push($errors, "Participants are required(more than 2)"); }
	if (empty($budget) || !is_numeric($budget)) { array_push($errors, "Budget is not properly written"); }
	if (empty($titleEmail)) { array_push($errors, "Email title is required"); }
	if (empty($fromEmail)) { array_push($errors, "The sender email is required"); }
	if (empty($messageEmail)) { array_push($errors, "The email message is required"); }

	// first check the database to make sure
	// that all the participants exist




	// Finally, use the SSH algorithm if there are no errors in the form
	if (0==count($errors)) {

		$database->insert('rounds_db', [
			'budget' => $budget,
			'participants_number' => count($participants),
			'date' => date("l jS \of F Y h:i:s A"),
			'user_id' => $_COOKIE['user_id'],
		]);

			//aici includ algoritmul SSH

			// Create a new instance.
			$santa = new SecretSantaCoreCosmin();

			// Set the email address the emails will be sent from.
			$santa->setFromEmail($fromEmail);

			// Set the sent emails' title.
			$santa->setEmailTitle( $titleEmail );

			// Set the recommended expenses value.
			$santa->setRecommendedExpenses( $budget );

		foreach ($participants as $participant) {
			// Set the users that are participating in the Secret Santa game.
			$santa->addUsers( [ [ 'name' => $participant['first_name'], 'email' => $participant['email'] ] ] );
		}

			// Pair users and send them the emails with the necessary emails.
			$santa->goRudolph($messageEmail);


		header('location: ../view/roundhistory.php');
		exit;
	}
}