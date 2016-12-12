<?php
    include_once('../database/connection.php');
	include_once('../database/reviews.php');
    include_once('../utils.php');

    if (isset($_SESSION['username'])) {
        try {
		    $reviews = getReviewerRestaurants($dbh, $_SESSION['username']);
	    } catch(PDOException $e) {
		    die($e->getMessage());
	    }     
    }


    $cssPath = "../css/list_reviews.css";
    include ('../templates/header.php');
    include ('../templates/list_reviews.php');
    include ('../templates/footer.php');
?>