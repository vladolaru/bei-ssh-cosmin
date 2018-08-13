<?php

require_once 'connection.php';

// LOGIN USER
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['first_name'] = $first_name;
			$_SESSION['success'] = "You are now logged in";
			header('location: persons.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

