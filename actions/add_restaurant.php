<?php
    include_once('../database/connection.php');
    include_once('../database/restaurants.php');
    
    try {
        insertRestaurant($dbh, $_POST);
    } catch(PDOException $e) {
		die($e->getMessage());
	}

    $linkAddress = "../pages/restaurant.php?id=" . $dbh->lastInsertId();
    header("Location: " . $linkAddress);
?>