<section id="namesInfo">
	<div>
		<img src="../images/medium/<?=$userImageProfile?>.jpg" id="profileImage" width="150" height="150">
	</div>

	<div id="infoUser">
		<h3 id="name"><?=$userProfile['name']?></h3>
		<h4 id='username'>@<?=$userProfile['username']?></h4>
		
		<?php 	if($userProfile['status'] == 'owner'){ ?>
					<p id="status">Owner</p>
		<?php	} else if($userProfile['status'] == 'reviewer'){ ?>
					<p id="status">Reviewer</p>
		<?php	} else{ ?>
					<p id="status">User</p>
		<?php	} ?>
	</div>
	
	<?php 
		if ($_SESSION['username'] == $_GET['username']) {
			$linkAddress = "../pages/edit_profile.php?username=" . $_GET['username'] ?>

			<form id="formEdit" action="<?=$linkAddress?>" method="post">
				<div>
					<input id="btnEdit" type="submit" value="Edit" />
				</div>
			</form>
	<?php } ?>
</section>

<section id="personalInfo">
	<h4> Personal Information </h4>
	<p id="email">Email: <?=$userProfile['email']?></p>
	<p id="country">Country: <?=$userProfile['country']?></p>
	<p id="birthday">Birthday: <?=$userProfile['birthday']?></p>
</section>