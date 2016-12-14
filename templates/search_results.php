<h1 id="restaurants">Restaurants <i id="list_restaurant" class="fa fa-angle-double-down" aria-hidden="true"></i></h1>
<div class="restaurant_container">
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

<h1 id="users">Users <i id="list_user" class="fa fa-angle-double-down" aria-hidden="true"></i></h1>
<div class="user_container">
    <?php foreach($users as $user) { ?>
        <article class="user">
            <h3>
                <?php
                    $linkAddress = "../pages/profile.php?username=" . $user['username'];
                    echo "<a href=\"$linkAddress\">";
                    echo $user['username'];
                    echo "</a>";
                ?>
            </h3>
            <p><?=$user['name']?></p>
            <p><?=$user['email']?></p>
            <p><?=$user['country']?></p>
        </article>
    <?php } ?>
</div>