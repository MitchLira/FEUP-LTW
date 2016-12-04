<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');

  $cssPath = "../css/home.css";
  include ('../templates/header.php');
  echo "<p style=\"margin-top:20em;\">Wrong username or password</p>";
  include ('../templates/login.php');
  include ('../templates/footer.php');
?>