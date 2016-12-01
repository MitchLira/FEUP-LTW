<?php
		include_once('../database/connection.php');
		include_once('../database/user.php');
		
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$realPass = getPassword($dbh, $username);

			$userDb = getUser($dbh, $username);
			
			if($realPass == $password){
				$_SESSION['username'] = $username;
				$_SESSION['status'] = $userDb['status'];
			}
			
			header('Location: ../pages/home.php'); 
		}
?>