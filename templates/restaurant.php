<?php

	function userIsOwner($username, $restaurant) {
		return ($restaurant['owner'] == $username);
	}


	if (isset($_SESSION['username']) && userIsOwner($_SESSION['username'], $restaurant)) {
		$linkAddress = "../pages/edit_restaurant.php?id=" . $restaurant['id'];

	$linkAddressImage = "../templates/uploadRestaurant.php?id=" . $restaurant['id'];
?>
		<form id="formEdit" action="<?=$linkAddress?>" method="get">
			<input id="btnEdit" type="submit" value="Edit" />
		</form>
		
<?php
	}
?>

<section id="mainInfo">
	<h1><?=$restaurant['name']?> <span class="rating"><?=$restaurant['avgRating']?></span></h1>
	<h4>by: @<?=$restaurant['owner']?></h4>
	<p><?=formatLocation($restaurant)?></p>
	<div id="map_wrapper">
		<div id="map"></div>
	</div>
</section>

<button id="btnAdditionalInfo" type="button">+</button>
<div id="line"></div>
<section id="additionalInfo">
	<p id="description"><?=$restaurant['description']?></p>
	<p><?=$restaurant['price']?></p>
	<p id="open-close"><?=$restaurant['open']?>-<?=$restaurant['close']?></p>
</section>

<section id="reviews">
	<h1>Reviews</h1>
	<?php foreach($reviews as $review) { ?>
		<article class="review">
			<p class="username"><?=$review['username']?></p>
			<p class="rating"><?=$review['rating']?></p>
			<p class="fulltext"><?=$review['fulltext']?></p>
		</article>
	<?php } ?>
</section>

<section id="photos">
	<h1>Photos</h1>
	<form id="addphoto" action="<?=$linkAddressImage?>" method="post">
    		<label for="addphoto">Add photo:</label>
       	 		<input id="upload" type="submit" value="Add Photo" />
    		</label>
		</form>
	<?php if(count($photos) > 0){
		foreach($photos as $photo) { ?>
		<article class="photo">
			<img src="../images/medium/<?=$photo['title']?>.jpg">
		</article>
	<?php } 
	}?>
</section>