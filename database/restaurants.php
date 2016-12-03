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
		$stmt = $dbh->prepare('SELECT * FROM restaurant 
							   ORDER BY avgRating DESC
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

	function updateRestaurant($dbh, $restaurant) {
		$stmt = $dbh->prepare('UPDATE restaurant SET name = ?, country = ?, city = ?, street = ?, zipcode = ?, 
													 price = ?,  categories = ?, open = ?, close = ? WHERE id = ?');

		$array = array(
			$restaurant['name'],
			$restaurant['country'],
			$restaurant['city'],
			$restaurant['street'],
			$restaurant['zipcode'],
			(float) $restaurant['price'],
			$restaurant['categories'],
			$restaurant['open'],
			$restaurant['close'],
			$restaurant['id']
		);

		$stmt->execute($array);
	}

	function getOwnerRestaurants($dbh, $username){
		//mais tarde adicionar cenas de rating, depois de fazer trigger da base de dados
		$stmt = $dbh->prepare('SELECT name FROM restaurant WHERE owner = ?');
		$stmt->execute(Array($username));
		return $stmt->fetchAll();
	}
?>