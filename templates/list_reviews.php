<div class="restaurant_container" style="margin-top:5em;">
    <?php foreach($reviews as $review) { ?>
        <article class="reviews">
            <h3>
                <?php
                    $linkAddress = "../pages/restaurant.php?id=" . $review['idRestaurant'];
                    echo "<a href=\"$linkAddress\">";
                    echo $review['name'];
                    echo "</a>";
                ?>
            </h3>
            <p><?=formatLocation($review)?></p>
            <p><?=$review['fulltext']?></p>
            <p><?=$review['rating']?></p>

            <div class="rating">
                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
        </article>
    <?php } ?>
</div>