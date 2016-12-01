<?php
	$linkAddress = "../pages/profile.php?username=" . $_SESSION['username']; 
	$username = $_SESSION['username']; ?>
	<a href="<?=$linkAddress?>"><?=$username?></a>
	<a href="../actions/action_logout.php">Logout</a>