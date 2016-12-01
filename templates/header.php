<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
   	<link rel="stylesheet" href="<?=$cssPath?>">
  </head>
  <body>
	  <header>
		  <a href="home.php" id="home">Restaurant Guide</a>
		  <input type="text" id="textSearch" placeholder="Search RestaurantGuide..."/>
		  <input type="button" id="btnSearch" value="Search" />

		  <?php
			if (isset($_SESSION['username'])) {
				include('logout.html');
			}
			else { ?>
				<a class="header_link" href="login.html" id="login">Login</a>
				<a class="header_link" href="create_account.php" id="create">Register</a>
			<?php }
		  ?>
	  </header>
