<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/restaurants.php');
  include_once('../database/reviews.php');

  try {
		$restaurant = getRestaurantById($dbh, $_GET['id']);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

    $cssPath = "../css/edit_profile.css";
    include ('../templates/header.php');
    include ('../templates/edit_profile.php');
    include ('../templates/footer.php');
?>