<?php
include 'connection.php';

if(!empty($_GET['email'])){
	$email = $_GET['email'];
	$desired_user = $database->select( "persons_db", '*', [ 'email[=]' => $email ] );
	$desired_user = $desired_user[0];
	include '../view/edit.php';
}