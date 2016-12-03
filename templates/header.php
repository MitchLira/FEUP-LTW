<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Shadows+Into+Light" rel="stylesheet">
   	<link rel="stylesheet" href="<?=$cssPath?>">
		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCfAXYcy8eU0XTFrNSXGfHZUoXnjLP-7c"></script>
		<script type="text/javascript" src="../scripts/jquery.googlemap.js"></script>
		<script type="text/javascript" src="../scripts/script.js"></script>
  </head>
  <body class=<?=pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME)?>>
	  <header>
		  <a href="home.php" id="home">Restaurant Guide</a>
		  <input type="text" id="textSearch" placeholder="Search RestaurantGuide..."/>
		  <input type="button" id="btnSearch" value="Search" />

		  <?php
			if (isset($_SESSION['username'])) {
				include('../pages/logout.php');
			}
			else { ?>
				<a class="header_link" href="login.html" id="login">Login</a>
				<a class="header_link" href="create_account.php" id="create">Register</a>
			<?php }
		  ?>
	  </header>
