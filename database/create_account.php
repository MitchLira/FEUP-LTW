<?php
	function insertUser($username, $name, $email, $country, $status, $birthday, $password, $dbh){
		$stmt = $dbh->prepare('INSERT INTO user (username, name, email, country, status, birthday, password)
								VALUES(:username, :name, :email, :country, :status, :birthday, :password)');
		
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':country', $country);
		$stmt->bindParam(':status', $status);
		$stmt->bindParam(':birthday', $birthday);
		$stmt->bindParam(':password', $password);
		
		$stmt->execute();
	}
?>