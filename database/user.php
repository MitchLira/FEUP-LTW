<?php
	function getPassword($dbh, $username){
		$stmt = $dbh->prepare('SELECT password FROM user WHERE username = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		
		return $result['password'];
	}
	
	function getUser($dbh, $username) {
		$stmt = $dbh->prepare('SELECT * FROM user WHERE username = ?');	
		$stmt->execute(array($username));
		
		return $stmt->fetch();
	}
	
	function createUser($dbh, $username, $name, $email, $country, $birthday, $password){
		$stmt = $dbh->prepare('INSERT INTO user VALUES(?,?,?,?,?,?,?)');
		$stmt->execute(array($username, $name, $email, $country, 'user', $birthday, $password));
	}

	function updateUser($dbh, $username, $name, $email,$country,$birthday, $password){
		$stmt = $dbh->prepare('UPDATE user SET name = ?, email = ?, country = ?,  birthday = ?, password = ? WHERE username = ?');
		$stmt->execute(array($name, $email, $country,$birthday, $password, $username));
	}
?>