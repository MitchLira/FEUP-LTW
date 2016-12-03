<?php
    include_once('../database/connection.php');
	include_once('../database/restaurants.php');
	include_once('../utils.php');

    if (isset($_GET['username'])) {
        $restaurants = getOwnerRestaurants($dbh, $_GET['username']);
    }
    else {
        $restaurants = getAllRestaurants($dbh);
    }

    $cssPath = "../css/home.css";
    include ('../templates/header.php');
    include ('../templates/list_restaurants.php');
    include ('../templates/footer.php');
?>