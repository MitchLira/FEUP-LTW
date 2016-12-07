<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$country =$_POST['country'];
		$birthday = $_POST['birthday'];
		$password = trim($_POST['password']);
		$confirm_password = trim($_POST['confirm_password']);

		updateUser($dbh, $username, $name, $email, $country, $birthday, $password);       
		header('Location: ../pages/home.php');
	}
?>