<?php

	function userIsOwner($username, $restaurant) {
		return ($restaurant['owner'] == $username);
	}


	if (isset($_SESSION['username']) && userIsOwner($_SESSION['username'], $restaurant)) {
		$linkAddress = "../pages/edit_restaurant.php";
		$linkAddressImage = "../pages/upload_photo_restaurant.php?id=" . $restaurant['id'];
?>
		<form id="formEdit" action=<?=$linkAddress?> method="get">
			<input type="hidden" name="id" value="<?=$restaurant['id']?>" /> 
			<input id="btnEdit" type="submit" value="Edit" />
		</form>
<?php
	}
?>

<section id="mainInfo">
	<h1><?=$restaurant['name']?><span class="rating"><?=$restaurant['avgRating']?></span></h1>
	<h4 id="owner">by: @<?=$restaurant['owner']?></h4>
	<h5><?=$restaurant['description']?></h5>
</section>

<button id="btnAdditionalInfo" type="button">-</button>
<div id="line"></div>

<section id="additionalInfo">
	<div id="location_wrapper">
		<p>Location: <?=formatLocation($restaurant)?></p>
		<div id="map"></div>
	</div>
	<p>Price: <?=$restaurant['price']?>€</p>
	<p id="open-close">Open hours: <?=$restaurant['open']?> - <?=$restaurant['close']?></p>
</section>

<section id="reviews">
	<h1>Reviews</h1>

	<?php 
		if ($_SESSION['status'] == "reviewer") { ?>
			<div id="new_review">
				<textarea name='review_text' rows="8" cols="50" form='review_form' placeholder="Write your review..." ></textarea>
				<form action='../actions/add_review.php' method='post' id='review_form' >
					<input type='hidden' name='id' value="<?=$restaurant['id']?>" >
					<input type='hidden' name='username' value="<?=$_SESSION['username']?>" >
					<label>Rate:
						<input type='number' name='rating' value='0' min='0' max='5' step='0.5' required="required"><span>★</span>
					</label>
					<input id='btnSubmit' class="submit_button" type='submit' value='Send'>
				</form>
			</div>
	<?php }
	
		foreach($reviews as $review) { ?>
			<article class="review">
				<p class="username"><?=$review['username']?> <span class="rating"><?=$review['rating']?></span></p>
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