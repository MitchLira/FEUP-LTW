<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$status = $_POST['status'];
		$country = $_POST['country'];
		$birthday = $_POST['birthday'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		createUser($dbh, $username, $name, $email, $country,$status, $birthday, $password);

		header('Location: ../pages/login.php');
	}
?>
