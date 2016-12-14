<?php
	include_once('../database/connection.php');
	include_once('../database/user.php');
	include_once('../database/images.php');
	include_once('../database/restaurants.php');
	include_once('../database/reviews.php');
	include_once('../utils.php');
	
	$username = $_GET['username'];
	
	try {
		$userProfile = getUser($dbh, $username);
		$userImageProfile = getUserImage($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	
	$cssPath = "../css/profile.css";
	include('../templates/header.php');
	include('../templates/profile.php');
	include('../templates/footer.php');
?>