<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/restaurants.php');
  include_once('../database/reviews.php');

  $username = $_SESSION['username'];
  
  $cssPath = "../css/edit_profile.css";
    include ('../templates/header.php');
    include ('../templates/edit_user_password.php');
    include ('../templates/footer.php');
?>