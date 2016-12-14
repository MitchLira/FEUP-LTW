<?php
  include_once('../database/connection.php');
  include_once('../database/restaurants.php');

  try {
		$restaurant = getRestaurantById($dbh, $_GET['id']);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

    $cssPath = "../css/edit_restaurant.css";
    include ('../templates/header.php');
    include ('../templates/edit_restaurant.php');
    include ('../templates/footer.php');
?>