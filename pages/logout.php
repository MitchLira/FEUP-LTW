<?php
	include_once('../database/connection.php');
	include_once('../database/images.php');
	
	$username = $_SESSION['username'];
	$status = $_SESSION['status'];

	$userImage = getUserImage($dbh, $username);
?>

	<div class="dropdown">
		<a id="btnDropdown" class="header_link" href="#">
			<?=$username?>
	<?php	if($userImage == $username){ 
				echo "<img id='img' src='../images/small/<?=$userImage?>.jpg'>";
			}
			else{
				echo "<img id='img' src='../images/defaultPerfil.jpg' width='25' height='25'>";
			} 
	?>
		</a>

		<div id="userDropdown" class="dropdown-content" style="margin-top: 2em">
			<a href="../pages/profile.php?username=<?=$_SESSION['username']?>"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>

			<?php 
			if ($status == 'reviewer') {
				echo "<a href=\"../pages/list_reviews.php\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> My reviews</a>";
			}
			else if ($status == 'owner') {
				$linkRestaurants = "../pages/list_restaurants.php?username=" . $_SESSION['username'];
				echo "<a href=\"$linkRestaurants\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> My restaurants</a>";
			}
			?>
			<a href="../actions/action_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
		</div>
	</div>