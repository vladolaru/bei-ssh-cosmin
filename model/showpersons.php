<?php
require_once '../utilities/connection.php';

$database_persons = $database->select("persons_db", [ "email", "first_name", "last_name", "user_id", "person_id"]);






