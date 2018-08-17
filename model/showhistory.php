<?php
include 'connection.php';

$database_rounds = $database->select("rounds_db", [ "budget", "participants_number", "date"]);






