<?php
    include_once('../database/connection.php');
	include_once('../database/images.php');
?>
<form action="../actions/action_upload_restaurant_image.php" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
    <input type="submit" value="Upload">
</form>