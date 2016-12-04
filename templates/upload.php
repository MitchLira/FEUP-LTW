<?php
    include_once('../database/connection.php');
	include_once('../database/upload.php');
?>
    <form action="../actions/action_upload_user_image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>

<?php
	/*try{
		$userProfile = getUser($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}*/
?>