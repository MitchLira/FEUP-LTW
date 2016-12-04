<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/restaurants.php');
  include_once('../database/reviews.php');

  $cssPath = "../css/home.css";
  include ('../templates/header.php');
  include ('../pages/login.html');
  include ('../templates/footer.php');
?>