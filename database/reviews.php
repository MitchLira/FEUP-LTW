<?php
	function getReviewsFromRestaurant($dbh, $idRestaurant) {
		$stmt = $dbh->prepare('SELECT * FROM reviews
							   WHERE idRestaurant = ?');
		$stmt->execute(array($idRestaurant));
		return $stmt->fetchAll();	
	}
?>