<?php
	include_once('database/connection.php');
	include_once('database/restaurants.php'); 
	include_once('database/reviews.php');
	
	include ('templates/header.php');

	$id = $_GET['id'];
	try {
		$restaurant = getRestaurantById($dbh, $id);
		$reviews = getReviewsFromRestaurant($dbh, $id);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

	include ('templates/restaurant.php');
	include ('templates/footer.php');
?>