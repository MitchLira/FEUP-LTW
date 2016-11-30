<html>
  <head>
    <title>Creat Account</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
	<form action="action_create_account.php" method="post">
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
			<label> Birthday: 
				<input type="date" name="birthday"> 
			</label>
		</p>
		<p>
			<label> Password: 
				<input type="password" name="password"> 
			</label>
		</p>
		<input type="submit" name="submit" value="Creat Account">
	 </form>
</html>