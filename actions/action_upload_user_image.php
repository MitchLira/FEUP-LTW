<?php
    //$linkProfile = "../pages/profile.php?username=" . $_SESSION['username'];

    include_once("../database/conectio.php");
    include_once("../database/upload.php");

    $username = $S_SESSION['username'];
    echo $username;
    echo 'lala';
    try{
		$userProfile = getUser($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}

    $smallFileName = "../images/small/$username.jpg";
    $mediumFileName = "../images/medium/$username.jpg";

    move_uploaded_file($_FILES['name']['tmp_name'], $mediumFileName);

    $medium = imagecreatefromjpeg($mediumFileName);
    $medium = imagecreatetruecolor(200,200);
    imagejpeg($medium, $mediumFileName);
    
    $width = imagesx($medium);
    $height = imagesy($medium);
    $square = min($width, $height);

    $small = imagecreatetruecolor(100, 100);
    imagecopyresized($small, $medium, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
    imagejpeg($small, $smallFileName);

    //header("Location: " . $linkProfile);
?>