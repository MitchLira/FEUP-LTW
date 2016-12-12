<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Open+Sans|Montserrat" rel="stylesheet">
   	<link rel="stylesheet" href="<?=$cssPath?>">
		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCfAXYcy8eU0XTFrNSXGfHZUoXnjLP-7c"></script>
	  	<script src="https://use.fontawesome.com/23b1c5ab02.js"></script>
		<script type="text/javascript" src="../scripts/jquery.googlemap.js"></script>
		<script type="text/javascript" src="../scripts/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="../scripts/script.js"></script>
  </head>
  <body class=<?=pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME)?>>
	  <header>
		  <a href="home.php" id="home" class="title">RestaurantGuide</a>
			<form class="searchbar" action="../pages/search_results.php" method="get">
				<input type="text" id="textSearch" name="text" placeholder="Search RestaurantGuide..."/>
				<input type="button" id="btnSearch"/>
			</form>

		  <?php
			if (isset($_SESSION['username'])) {
				include('../pages/logout.php');
			}
			else { ?>
				<a class="header_link" href="login.php" id="login">Login</a>
				<a class="header_link" href="create_account.php" id="create">Register</a>
			<?php }
		  ?>
	  </header>
