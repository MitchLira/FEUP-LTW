<?php
	include_once("database/connection.php");
	include_once("database/user.php");

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$status = $_POST['status'];
		$birthdat = $_POST['birthday'];
		$password = $_POST['password'];

		insertUser($dbh, $username,$name,$email,$country,$birthday,$password);

		header('Location: home.php');
	}
?>
