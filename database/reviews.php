<?php
	function getReviewsFromRestaurant($dbh, $idRestaurant) {
		$stmt = $dbh->prepare('SELECT * FROM reviews
							   WHERE idRestaurant = ?');
		$stmt->execute(array($idRestaurant));
		return $stmt->fetchAll();	
	}

	function getReviewerRestaurants($dbh, $username){
		$stmt = $dbh->prepare('SELECT idRestaurant,fulltext,rating FROM reviews WHERE username = ?');
		$stmt->execute(array($username));
		return $stmt->fetchAll();
	}

	function insertReview($dbh, $username, $idRestaurant, $fulltext, $rating) {
		$stmt = $dbh->prepare('INSERT INTO reviews VALUES (NULL, ?, ?, ?, ?)');
		$stmt->execute(array($username, $idRestaurant, $fulltext, $rating));
	}
?>