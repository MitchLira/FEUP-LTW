<?php
	include_once("../database/connection.php");
	include_once("../database/restaurants.php");

	if(isset($_POST['submit'])) {
		updateRestaurant($dbh, $_POST);   
		header('Location: ../pages/restaurant.php?id=' . $_POST['id']);
	}
?>