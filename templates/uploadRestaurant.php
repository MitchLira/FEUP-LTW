<?php
    include_once('../database/connection.php');
	include_once('../database/images.php');

    $idRestaurant = $_GET['id'];
?>
<form action="../actions/action_upload_restaurant_image.php?id=<?=$idRestaurant?>" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
    <input type="submit" value="Upload">
</form>