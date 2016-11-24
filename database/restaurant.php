<?php
	function getAllRestaurants($dbh) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant');
		$stmt->execute();
		return $stmt->fetchAll();
	}


	function getRestaurantsByRating($dbh) {
		$stmt = $dbh->prepare('SELECT restaurant.name, AVG(rating) as rate FROM restaurant 
							   LEFT JOIN reviews ON(restaurant.id = idRestaurant) 
							   GROUP BY restaurant.name 
							   ORDER BY rate DESC');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getRestaurantsByRating($dbh, $limit) {
		$stmt = $dbh->prepare('SELECT *, AVG(rating) as rate FROM restaurant 
							   LEFT JOIN reviews ON(restaurant.id = idRestaurant) 
							   GROUP BY restaurant.name 
							   ORDER BY rate DESC
							   LIMIT ?');
		
		$stmt->execute(array($limit));
		return $stmt->fetchAll();
	}

	function getRecentRestaurants($dbh) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant 
							   ORDER BY entryDate DESC');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getRecentRestaurants($dbh, $limit) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant 
							   ORDER BY entryDate DESC
							   LIMIT ?');
		$stmt->execute(array($limit));
		return $stmt->fetchAll();
	}
?>