<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");
	include_once("../utils.php");

	if(isset($_POST['submit'])){
        $username = filter($_SESSION['username']);
		$name = filter($_POST['name']);
		$email = filter($_POST['email']);
		$country = $_POST['country'];
		$birthday = $_POST['birthday'];

		updateUser($dbh, $username, $name, $email, $country, $birthday);       
		header('Location: ../pages/home.php');
	}
?>