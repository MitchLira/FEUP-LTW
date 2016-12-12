<?php
    include_once("../database/connection.php");
    include_once("../database/images.php");

    $idRestaurant = $_GET['id'];
    $linkProfile = "../pages/restaurant.php?id=" . $idRestaurant;

    $id = getNumberOfImagesRestaurant($dbh, $idRestaurant);
    $title = $idRestaurant . $id;

    try{
        uploadRestImage($dbh, $idRestaurant, $title);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

    $originalFileName = "../images/originals/$title.jpg";
    $smallFileName = "../images/small/$title.jpg";
    $mediumFileName = "../images/medium/$title.jpg";

    move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);

    $original = imagecreatefromjpeg($originalFileName);

    $width = imagesx($original);
    $height = imagesy($original);
    $square = min($width, $height);

    $small = imagecreatetruecolor(25, 25); 
    imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 50, 50, $square, $square);
    imagejpeg($small, $smallFileName);

    $mediumwidth = $width;
    $mediumheight = $height;

    if ($mediumwidth > 200) {
        $mediumwidth = 200;
        $mediumheight = $mediumheight * ( $mediumwidth / $width );
    }

    $medium = imagecreatetruecolor($mediumwidth, $mediumheight); 
    imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
    imagejpeg($medium, $mediumFileName);

    header("Location: " . $linkProfile);
?>