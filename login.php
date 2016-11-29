<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
	<form method="post">
		<h1><a>Login</a></h1>
		<p>
			<label> Username: 
				<input type="text" name="username"> 
			</label>
		</p>
		<p>
			<label> Password: 
				<input type="password" name="password"> 
			</label>
		</p>
		<input type="submit" name="submit" value="Login">
	 </form>
	  <?php
		include_once('database/login.php'); 
		include_once('database/connection.php');
		
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$realPass = getPassword($username, $dbh);
			
			if($realPass == $password)	//se der sucesso temos que mudar de página
				echo '-----------Sucess';
			else
			{
				$func = _FUNCTION_;
				$func();
			}
		}
	  ?>
</html>