<?php
    if ( $status == "owner" && isset($_GET['username']) ) { 
        $linkAddress = "../pages/new_restaurant.php?username=" . $_GET['username'] ?>
        <div id="wrapper">
        <a href=<?=$linkAddress?>><button type="button" id="button">New</button></a>
        </div>
    <?php } ?>

<div class="restaurant_container">
    <?php foreach($restaurants as $restaurant) { ?>
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