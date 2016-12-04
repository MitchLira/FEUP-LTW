<?php? 
    //$cssPath = "../css/profile.css";
    include_once('../database/connection.php');
	include_once('../database/upload.php');
?>
    <section id="upload">
        <form action="../actions/action_upload_user_image.php" method="post" enctype="multipart/form-data">
          <input type="file" name="image">
          <input type="submit" value="Upload">
        </form>
    </section>

<?php
	/*try{
		$userProfile = getUser($dbh, $username);
	} catch(PDOException $e) {
		die($e->getMessage());
	}*/
?>