<?php
	include_once('../database/connection.php');
	include_once('../database/restaurants.php');
	include_once('../database/reviews.php');
	include_once('../utils.php');


	$id = $_GET['id'];
	try {
		$restaurant = getRestaurantById($dbh, $id);
		$reviews = getReviewsFromRestaurant($dbh, $id);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

	$cssPath = "../css/restaurant.css";
	include ('../templates/header.php');
	include ('../templates/restaurant.php');
	include ('../templates/footer.php');
?>
