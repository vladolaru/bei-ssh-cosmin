<?php
include 'connection.php';

$database_persons = $database->select("persons_db", [ "email", "first_name", "last_name"]);






