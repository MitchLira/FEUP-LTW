<?php

function formatLocation($restaurant) {
    return $restaurant['state'] . ", " . $restaurant['city'] . ", " . $restaurant['country'];
}

?>