<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
   	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <?php
	  	session_start();
	  ?>

	  <header>
		  <a href="home.php" id="home">Restaurant Guide</a>
		  <input type="text" id="textSearch" placeholder="Search RestaurantGuide..."/>
		  <input type="button" id="btnSearch" value="Search" />

		  <?php
			if (isset($_SESSION['username'])) {
				echo "hehe";
			}
			else {
				echo "<a>Login</a>";
				echo "<a>Register</a>";
			}
		  ?>
	  </header>
