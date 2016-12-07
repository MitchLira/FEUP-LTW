<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
		$new_password = $_POST['new_password'];
		
		updateUserPassword($dbh, $username, $new_password);       
		header('Location: ../pages/home.php');
	}
?>