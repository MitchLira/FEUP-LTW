<html>
  <head>
    <title>Creat Account</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
	<form method="post">
		<h1><a>Creat Account</a></h1>
		<p>
			<label> Username: 
				<input type="text" name="username"> 
			</label>
		</p>
		<p>
			<label> Name: 
				<input type="text" name="name"> 
			</label>
		</p>
		<p>
			<label> Email: 
				<input type="text" name="email"> 
			</label>
		</p>
		<p>
			<label> Country: 
				<input type="text" name="country"> 
			</label>
		</p>
		<p>
			<label> Status: 
				<input type="text" name="status"> 
			</label>
		</p>
		<p>
			<label> Birthday: 
				<input type="text" name="birthday"> 
			</label>
		</p>
		<p>
			<label> Password: 
				<input type="password" name="password"> 
			</label>
		</p>
		<input type="submit" name="submit" value="Creat Account">
	 </form>
	  <?php
		include_once('database/create_account.php'); 
		include_once('database/connection.php');
		
		if(isset($_POST['submit'])){
			
		}
	  ?>
</html>