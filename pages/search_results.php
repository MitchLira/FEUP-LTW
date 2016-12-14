<?php
    include_once('../database/connection.php');
	include_once('../database/user.php');
	include_once('../database/restaurants.php');
	include_once('../database/reviews.php');
    include_once('../utils.php');
    
    try {
        $restaurants = searchRestaurants($dbh, $_GET['text']);
        $users = searchUsers($dbh, $_GET['text']);
    } catch(PDOException $e) {
        die($e->getMessage());
    }

    $cssPath = "../css/search_results.css";
    include ('../templates/header.php');
    include ('../templates/search_results.php');
    include ('../templates/footer.php');
?>