<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$confirm_password = trim($_POST['confirm_password']);
		$new_password = trim($_POST['new_password']);
		
		updateUserPassword($dbh, $username, $new_password);       
		header('Location: ../pages/home.php');
	}
?>