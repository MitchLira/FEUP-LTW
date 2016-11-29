<section id="mainInfo">
	<h3 id="name"><?=$restaurant['name']?></h3>
	<h4 id="owner">By: <?=$restaurant['owner']?></h4>
	<p id="location"><?=$restaurant['location']?></p>
	<p id="price"><?=$restaurant['price']?></p>
</section>

<section id="additionalInfo">
	<p id="categories"><?=$restaurant['categories']?></p>
	<p id="open-close"><?=$restaurant['open']?>-<?=$restaurant['close']?></p>
</section>

<section id="reviews">
	<?php foreach($reviews as $review) { ?>
		<article class="review">
			<p class="username"><?=$review['username']?></p>
			<p class="rating"><?=$review['rating']?></p>
			<p class="fulltext"><?=$review['fulltext']?></p>
		</article>
	<?php } ?>
</section>