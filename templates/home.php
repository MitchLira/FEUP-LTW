<div id="home_background">
</div>

<div id="home_container">	
	<section id="top_rated">
		<h1>Top reviews</h1>
		<?php foreach($topRestaurants as $restaurant) { ?>
			<article class="restaurant">
				<h3>
					<?php
						$linkAddress = "restaurant.php?id=" . $restaurant['idRestaurant'];
						echo "<a href=\"$linkAddress\">";
						echo $restaurant['name'];
						echo "</a>";
					?>
				</h3>
				<p><?=$restaurant['location']?></p>
				<p><?=$restaurant['category']?></p>
			</article>
		<?php } ?>
	</section>

	<section id="most_recent">
		<h1>Most recent</h1>
		<?php foreach($recentRestaurants as $restaurant) { ?>
			<article class="restaurant">
				<h3>
					<?php
						$linkAddress = "restaurant.php?id=" . $restaurant['id'];
						echo "<a href=\"$linkAddress\">";
						echo $restaurant['name'];
						echo "</a>";
					?>
				</h3>
				<p><?=$restaurant['location']?></p>
				<p><?=$restaurant['category']?></p>
			</article>
		<?php } ?>
	</section>
</div>
