<?php
		include_once('database/connection.php');
		include_once('database/user.php');

		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$realPass = getPassword($username, $dbh);

			if($realPass == $password){
				$_SESSION['username'] = $username;
			}


			header('Location: home.php');
		}
?>
