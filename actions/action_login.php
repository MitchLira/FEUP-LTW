<?php
		session_set_cookie_params(0, "/", "fe.up.pt", true, true);
		include_once('../database/connection.php');
		include_once('../database/user.php');
		include_once("../utils.php");
		
		if(isset($_POST['submit'])) {
			$username = filter($_POST['username']);
			$password = filter($_POST['password']);
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