<?php
	function getAllRestaurants($dbh) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant');	
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getRestaurantsByRating($dbh) {
		$stmt = $dbh->prepare('SELECT *, AVG(rating) as rate FROM restaurant 
							   LEFT JOIN reviews ON(restaurant.id = idRestaurant) 
							   GROUP BY restaurant.id 
							   ORDER BY rate DESC');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getRestaurantsByRatingLimit($dbh, $limit) {
		$stmt = $dbh->prepare('SELECT *, AVG(rating) as rate FROM restaurant 
							   LEFT JOIN reviews ON(restaurant.id = idRestaurant) 
							   GROUP BY restaurant.id 
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
	
	function getRecentRestaurantsLimit($dbh, $limit) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant 
							   ORDER BY entryDate DESC
							   LIMIT ?');
		$stmt->execute(array($limit));
		return $stmt->fetchAll();
	}

	function getRestaurantById($dbh, $id) {
		$stmt = $dbh->prepare('SELECT * FROM restaurant 
							   WHERE id = ?');
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

	function updateRestaurantById($dbh, $id, $name, $location, $price, $categories, $open, $close) {
		$stmt = $dbh->prepare('UPDATE restaurant SET name = ?, location = ?, price = ?,  categories = ?, open = ?, close = ? WHERE id = ?');
		$stmt->execute(array($name, $location, $price,$categories, $open, $close, $id));
	}
?>