<?php

// If you installed via composer, just use this code to require autoloader on the top of your projects.
require '../vendor/autoload.php';

// Using Medoo namespace
use Medoo\Medoo;

$database = new Medoo([
// required
	'database_type' => 'mysql',
	'database_name' => 'ssh_main',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'port' => 4002,
]);