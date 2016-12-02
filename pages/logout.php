<?php
	$linkAddress = "../pages/profile.php?username=" . $_SESSION['username']; 
	$username = $_SESSION['username']; ?>
	<a class="header_link" href="../actions/action_logout.php">Logout</a>
	<a class="header_link" href="<?=$linkAddress?>"><?=$username?></a>