<?php

function formatLocation($restaurant) {
    $string = "";

    if ($restaurant['city']) {
        $string .= $restaurant['city'] . ", ";
    }

    if ($restaurant['state']) {
        $string .= $restaurant['state'] . ", ";
    }

    return $string . $restaurant['country'];
}

function filter($value) {
    return htmlentities(trim($value));
}

?>