<?php
    include_once('../database/connection.php');
    include_once('../database/reviews.php');
    include_once("../utils.php");

    insertReview($dbh, $_POST['username'], $_POST['id'], filter($_POST['review_text']), $_POST['rating']);

    $location = "../pages/restaurant.php?id=" . $_POST['id'];
    header("Location: " . $location);
?>