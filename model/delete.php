<?php
include 'connection.php';
$email=$_GET['email'];

$database->delete("persons_db", [ 'email[=]'=>$email
]);

header( 'location: ../view/persons.php' );