<?php
    if ( $status == "owner" && isset($_GET['username']) ) { 
        $linkAddress = "../pages/new_restaurant.php?username=" . $_GET['username'] ?>
        <a href=<?=$linkAddress?> style="margin-top:5em;"><button type="button" style="margin-top:5em;">New</button></a>
    <?php } ?>

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