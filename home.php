<?php
  include_once('database/connection.php');
  include_once('database/restaurants.php');

  try {
		$topRestaurants = getRestaurantsByRatingLimit($dbh, 10);
	  	$recentRestaurants = getRecentRestaurantsLimit($dbh, 10);
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	
  include ('templates/header.php');
  include ('templates/home.php');
  include ('templates/footer.php');
?>
