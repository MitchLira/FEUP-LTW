<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
        $username = $_SESSION['username'];
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$country = $_POST['country'];
		$birthday = $_POST['birthday'];
		
		updateUser($dbh, $username, $name, $email, $country, $birthday);       
		header('Location: ../pages/home.php');
	}
?>