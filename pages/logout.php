<?php
	$linkProfile = "../pages/profile.php?username=" . $_SESSION['username']; 
	$username = $_SESSION['username'];
	$status = $_SESSION['status'] ?>

	<div class="dropdown">
		<a id="btnDropdown" class="header_link" href="#"><?=$username?></a>
		<div id="userDropdown" class="dropdown-content" style="margin-top: 2em">
			<a href="<?=$linkProfile?>">Profile</a>

			<?php 
			if ($status == 'reviewer') {
				$linkReviews = "../pages/list_reviews.php?username=" . $_SESSION['username'];
				echo "<a href=\"$linkReviews\">My reviews</a>";
			}
			else if ($status == 'owner') {
				$linkRestaurants = "../pages/list_restaurants.php?username=" . $_SESSION['username'];
				echo "<a href=\"$linkRestaurants\">My reviews</a>";
			}
			?>
			<a href="../actions/action_logout.php">Logout</a>
		</div>
	</div>