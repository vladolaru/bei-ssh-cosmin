<?php
include 'connection.php';
$email=$_GET['email'];

$database_person_details=$database->select("persons_db", [ 'email'=>$email
]);

header( 'location: ../view/addedit.php' );