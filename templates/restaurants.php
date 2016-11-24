<section id="top_rated">
	<?php foreach($topRestaurants as $restaurant) { ?>
		<article>
			<h3><?=$restaurant['name']?></h3>
			<p><?=$restaurant['location']?></p>
			<p><?=$restaurant['category']?></p>
		</article>
	<?php } ?>
</section>
<section id="most_recent">
	<?php foreach($recentRestaurants as $restaurant) { ?>
		<article>
			<h3><?=$restaurant['name']?></h3>
			<p><?=$restaurant['location']?></p>
			<p><?=$restaurant['category']?></p>
		</article>
	<?php } ?>
</section>