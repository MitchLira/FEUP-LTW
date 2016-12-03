<?php
    include_once('../database/connection.php');
    include_once('../database/restaurants.php');
    

    try {
        insertRestaurant($dbh, $_POST);
        $restaurant = getRecentRestaurantsLimit($dbh, 1);
    } catch(PDOException $e) {
		die($e->getMessage());
	}

    $linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
    header("Location: " . $linkAddress);
?>