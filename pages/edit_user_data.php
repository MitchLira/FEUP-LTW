<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/restaurants.php');
  include_once('../database/reviews.php');

  $username = $_SESSION['username'];
  try {
		$user = getUser($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
 }

  $cssPath = "../css/edit_user_data.css";
    include ('../templates/header.php');
    include ('../templates/edit_user_data.php');
    include ('../templates/footer.php');
?>