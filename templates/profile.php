<?php

	if (isset($_SESSION['username'])) {
		$linkAddress = "../pages/edit_profile.php?id=" . $userProfile['username'];
?>

		<form id="formEdit" action="<?=$linkAddress?>" method="post">
			<input id="btnEdit" type="submit" value="Edit" />
		</form>
<?php
	}
?>

<section id="namesInfo">
	<h3 id="name"><?=$userProfile['name']?></h3>
	<h4 id='username'>@<?=$userProfile['username']?></h4>
	
	<?php if($userProfile['status'] == 'owner'){ ?>
			<p id="status">Owner</p>
	<?php	} else if($userProfile['status'] == 'reviewer'){ ?>
			<p id="status">Reviewer</p>
	<?php	} else{ ?>
			<p id="status">User</p>
	<?php	} ?>
</section>

<section id="personalInfo">
	<h4> Personal Information </h4>
	<p id="email">Email: <?=$userProfile['email']?></p>
	<p id="country">Country: <?=$userProfile['country']?></p>
	<p id="birthday">Birthday: <?=$userProfile['birthday']?></p>
</section>

<?php
	if($userProfile['status'] == 'owner'){
		$ownerRestaurants = getOwnerRestaurants($dbh, $userProfile['username']);
	?>
	
	<section class="restaurants">
		<h4><?=$userProfile['name'] ?> restaurants</h4>
	
		<?php foreach($ownerRestaurants as $rest){ ?>
				<p> &#10039 <?=$rest['name']?></p>
		<?php } ?>
	</section>
	
<?php
	}
	else if($userProfile['status'] == 'reviewer'){
		$reviewerRestaurants = getReviewerRestaurants($dbh, $userProfile['username']);
	?>
	
	<section class="reviews">
		<h4><?=$userProfile['name']?> reviews</h4>
	
		<?php foreach($reviewerRestaurants as $rest){ 
				$nameRest = getRestaurantById($dbh, $rest['idRestaurant']); ?>
				
				<h5> &#10039 <?=$nameRest['name']?></h5>
				<p>  &#10137 <?=$rest['fulltext']?></p>
				<p>  &#10137 Rating: <?=$rest['rating']?></p>
		<?php } ?>
	</section>

<?php	
	}
?>