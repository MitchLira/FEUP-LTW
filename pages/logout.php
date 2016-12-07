<?php
	include_once('../database/connection.php');
	include_once('../database/images.php');


	$username = $_SESSION['username'];
	$status = $_SESSION['status'];

	$userImage = getUserImage($dbh, $username);
	if($userImage == $username){ ?>
		<img src="../images/small/<?=$userImage?>.jpg">
<?php	}
	else{ ?>
		<img src="../images/defaultPerfil.jpg" width="25" height="25">
<?php	}  ?>

	<div class="dropdown">
		<a id="btnDropdown" class="header_link" href="#"><?=$username?></a>
		<div id="userDropdown" class="dropdown-content" style="margin-top: 2em">
			<a href="../pages/profile.php">Profile</a>

			<?php 
			if ($status == 'reviewer') {
				echo "<a href=\"../pages/list_reviews.php\">My reviews</a>";
			}
			else if ($status == 'owner') {
				$linkRestaurants = "../pages/list_restaurants.php?username=" . $_SESSION['username'];
				echo "<a href=\"$linkRestaurants\">My restaurants</a>";
			}
			?>
			<a href="../actions/action_logout.php">Logout</a>
		</div>
	</div>