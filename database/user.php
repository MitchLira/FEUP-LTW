<?php
	function getPassword($dbh, $username){
		echo '----------';
		echo $_SERVER['DOCUMENT_ROOT'] . "/header.php";
		echo '----------';
		$stmt = $dbh->prepare('SELECT password FROM user WHERE username = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result['password'];
	}
	
	function getAllUsers($dbh) {
		$stmt = $dbh->prepare('SELECT * FROM user');	
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function insertUser($dbh, $username, $name, $email, $country, $birthday, $password){
		$stmt = $dbh->prepare('INSERT INTO user (username, name, email, country, status, birthday, password)
								VALUES(:username, :name, :email, :country, :status, :birthday, :password)');
		
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':country', $country);
		$stmt->bindParam(':status', 'user');
		$stmt->bindParam(':birthday', $birthday);
		$stmt->bindParam(':password', $password);
		
		$stmt->execute();
	}
?>