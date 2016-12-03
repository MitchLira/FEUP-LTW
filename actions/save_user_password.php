<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$new_password = $_POST['new_password'];

		updateUserPassword($dbh, $username, $password);       
		header('Location: ../pages/home.php');
	}
?>