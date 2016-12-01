<?php
	include_once("../database/connection.php");
	include_once("../database/restaurants.php");

	if(isset($_POST['submit'])){
       
		$id = $_POST['id'];
		$name = $_POST['name'];
		$location = $_POST['location'];
		$price = (float) $_POST['price'];
		$categories = $_POST['categories'];
		$open = $_POST['open'];
		$close = $_POST['close'];

		updateRestaurantById($dbh, $id, $name, $location, $price, $categories, $open, $close);       
		header('Location: ../pages/home.php');
	}
?>