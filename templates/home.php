<div id="home_background">
	<div id="layout_image">
		<h1 class="title">Restaurant Guide</h1>
		<h3 class="title">Make your tummy happy!</h3>
	</div>
</div>

<div id="home_container">	
	<section id="top_rated">
		<h1>Best of the best</h1>
		<div class="restaurant_container">
			<?php foreach($topRestaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'] . "<span class='rating'>" . $restaurant['avgRating'] . "</span>";
							echo "</a>";
						?>
					</h3>
					<p><?=formatLocation($restaurant)?></p>
				</article>
			<?php } ?>
		</div>
	</section>

	<section id="most_recent">
		<h1>Newcomers</h1>
		<div class="restaurant_container">
			<?php foreach($recentRestaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'] . "<span class='rating'>" . $restaurant['avgRating'] . "</span>";
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
