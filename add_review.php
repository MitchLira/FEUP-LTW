<?php
    include_once('database/connection.php');
    include_once('database/reviews.php');

    insertReview($dbh, $_POST['username'], $_POST['id'], $_POST['review_text'], $_POST['rating']);

    $location = "restaurant.php?id=" . $_POST['id'];
    header("Location: " . $location);
?>