<?php
	include_once('../database/connection.php');
	include_once('../database/user.php');
	include_once('../database/restaurants.php');
	include_once('../database/reviews.php');
	
	
	$username = $_GET['username'];
	try{
		$userProfile = getUser($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	$cssPath = "../css/profile.css";
	include('../templates/header.php');
	include('../templates/profile.php');
	include('../templates/footer.php');
?>