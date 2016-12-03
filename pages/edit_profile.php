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

  $cssPath = "../css/edit_profile.css";
  include ('../templates/header.php');
?>

  <a href="../pages/edit_user_data.php"><button type="button">Change your information</button></a>
  <a href="../pages/edit_user_password.php"><button type="button">Change your information</button></a>

<?php
  include ('../templates/footer.php');
?>