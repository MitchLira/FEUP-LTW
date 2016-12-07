<?php
    include_once('../database/connection.php');
	include_once('../database/images.php');

    $idRestaurant = $_GET['id'];

    $cssPath = "../css/upload_photo_restaurant.css";
    include ('../templates/header.php');
    include ('../templates/upload_photo_restaurant.php');
    include ('../templates/footer.php');


?>