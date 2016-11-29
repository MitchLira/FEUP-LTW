<?php
	function getPassword($username, $dbh){
		$stmt = $dbh->prepare('SELECT password FROM user WHERE username = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result[0];
	}
?>