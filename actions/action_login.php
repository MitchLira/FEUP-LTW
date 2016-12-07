<?php
		include_once('../database/connection.php');
		include_once('../database/user.php');
		
		if(isset($_POST['submit'])) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$realPass = getPassword($dbh, $username);

			$userDb = getUser($dbh, $username);
			
			if (password_verify($password, $realPass)) {
				$_SESSION['username'] = $username;
				$_SESSION['status'] = $userDb['status'];

				header('Location: ../pages/home.php'); 
			}
			else { 
				header('Location: ../pages/session.php');
			}
		}
?>