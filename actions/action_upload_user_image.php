<?php
    include_once("../database/connection.php");
    include_once("../database/images.php");

    $username = $_SESSION['username'];    
    $linkProfile = "../pages/profile.php?username=" . $username;
    $title = $username;

    try{
        updateUserImage($dbh, $username, $title);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

    $originalFileName = "../images/originals/$username.jpg";
    $mediumFileName = "../images/medium/$username.jpg";

    move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);

    $original = imagecreatefromjpeg($originalFileName);

    $width = imagesx($original);
    $height = imagesy($original);
    $square = min($width, $height);

    $mediumwidth = $width;
    $mediumheight = $height;

    if ($mediumwidth > 150) {
        $mediumwidth = 150;
        $mediumheight = $mediumheight * ( $mediumwidth / $width );
    }

    $medium = imagecreatetruecolor($mediumwidth, $mediumheight); 
    imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
    imagejpeg($medium, $mediumFileName);

    header("Location: " . $linkProfile);
?>