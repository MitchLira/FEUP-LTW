<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
   	<link rel="stylesheet" href="<?=$cssPath?>">
		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="scripts/script.js"></script>
  </head>
  <body class=<?=pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME)?>>
	  <header>
		  <a href="home.php" id="home">Restaurant Guide</a>
		  <input type="text" id="textSearch" placeholder="Search RestaurantGuide..."/>
		  <input type="button" id="btnSearch" value="Search" />

		  <?php
			if (isset($_SESSION['username'])) {
				include('logout.php');
			}
			else { ?>
				<a class="header_link" href="login.html" id="login">Login</a>
				<a class="header_link" href="create_account.php" id="create">Register</a>
			<?php }
		  ?>
	  </header>
