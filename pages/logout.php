<?php
	$linkAddress = "../pages/profile.php?username=" . $_SESSION['username']; 
	$username = $_SESSION['username'];
	$status = $_SESSION['status'] ?>

	<a class="header_link" href="../actions/action_logout.php">Logout</a>
	<div class="dropdown">
		<a id="btnDropdown" class="header_link" href="#"><?=$username?></a>
		<div id="userDropdown" class="dropdown-content">
			<a href="#">Profile</a>

			<?php 
			if ($status == 'reviewer') {
				echo "<a href=\"#\">My reviews</a>";
			}
			else if ($status == 'owner') {
				echo "<a href=\"#\">My restaurants</a>";
			}
			?>
		</div>
	</div>