<div id="home_background">
	<div id="layout_image">
		<h1>Restaurant Guide</h1>
		<h3>Make your tummy happy!</h3>
	</div>
</div>

<div id="home_container">	
	<section id="top_rated">
		<h1>Top reviews</h1>
		<div class="restaurant_container">
			<?php foreach($topRestaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'];
							echo "</a>";
						?>
					</h3>
					<p><?=formatLocation($restaurant)?></p>
				</article>
			<?php } ?>
		</div>
	</section>

	<section id="most_recent">
		<h1>Most recent</h1>
		<div class="restaurant_container">
			<?php foreach($recentRestaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'];
							echo "</a>";
						?>
					</h3>
					<p><?=formatLocation($restaurant)?></p>
				</article>
			<?php } ?>
		</div>
	</section>
</div>

<div class="show_all">
	<a href="../pages/list_restaurants.php">View all restaurants</a>
</div>
