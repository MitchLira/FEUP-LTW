<?php
	include_once("../database/connection.php");
	include_once("../database/user.php");

	if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
		$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
		
		updateUserPassword($dbh, $username, $new_password);       
		header('Location: ../pages/home.php');
	}
?>