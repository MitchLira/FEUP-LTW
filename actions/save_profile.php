<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
        $username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$country =$_POST['country'];
		$birthday = $_POST['birthday'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		updateUser($dbh, $username, $name, $email, $country, $birthday, $password);       
		header('Location: ../pages/home.php');
	}
?>