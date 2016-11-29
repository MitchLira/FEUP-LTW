<html>
  <head>
    <title>Restaurant Guide</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
    <header>
      <h1><a>Restaurant Guide</a></h1>
	  <?php
		include_once('database/restaurant.php'); 
		include_once('database/connection.php');
		$result = getAllRestaurants($dbh);
		
		foreach($result as $rest){
			echo $rest['name'];
		}
	  ?>
    </header>
</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  