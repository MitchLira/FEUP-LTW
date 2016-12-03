<?php

	function userIsOwner($username, $restaurant) {
		return ($restaurant['owner'] == $username);
	}


	if (isset($_SESSION['username']) && userIsOwner($_SESSION['username'], $restaurant)) {
		$linkAddress = "../pages/edit_restaurant.php?id=" . $restaurant['id'];
?>

		<form id="formEdit" action="<?=$linkAddress?>" method="post">
			<input id="btnEdit" type="submit" value="Edit" />
		</form>
<?php
	}
?>

<section id="mainInfo">
	<h3 id="name"><?=$restaurant['name']?></h3>
	<h4 id="owner">By: <?=$restaurant['owner']?></h4>
	<p id="location"><?=formatLocation($restaurant)?></p>
	<p id="price"><?=$restaurant['price']?></p>
	<div id="map" style="z-index: 9999; width: 300px; height: 300px;"></div>
</section>

<button id="btnAdditionalInfo" type="button">+</button>
<section id="additionalInfo">
	<p id="description"><?=$restaurant['description']?></p>
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