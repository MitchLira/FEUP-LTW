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

	function updateUser($dbh, $username, $name, $email,$country,$birthday ){
		$stmt = $dbh->prepare('UPDATE user SET name = ?, email = ?, country = ?,  birthday = ? WHERE username = ?');
		$stmt->execute(array($name, $email, $country,$birthday, $username));
	}

	function updateUserPassword($dbh, $username, $password) {
		$stmt = $dbh->prepare('UPDATE user SET password = ? WHERE username = ?');
		$stmt->execute(array($password $username));
	}

	function searchUsers($dbh, $string) {
		$param = "%" . $string . "%";

		$stmt = $dbh->prepare("SELECT * FROM user 
							   WHERE username LIKE ?
							   OR name LIKE ?
							   OR country LIKE ?
							   OR email LIKE ?");

		$stmt->execute(array($param, $param, $param, $param));
		return $stmt->fetchAll();
	}
?>