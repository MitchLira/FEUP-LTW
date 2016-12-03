<div class="restaurant_container" style="margin-top:5em;">
    <?php foreach($restaurants as $restaurant) { ?>
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