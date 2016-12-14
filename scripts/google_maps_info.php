<?php
    include_once('../database/connection.php');
    include_once('../database/restaurants.php');

    header('Content-Type: application/json');

    $restaurant = getRestaurantById($dbh, $_GET['id']);
    
    echo json_encode(array(
        "name" => $restaurant['name'],
        "street" => $restaurant['street'],
        "state" => $restaurant['state'],
        "city" => $restaurant['city'],
        "country" => $restaurant['country']
    ));
?>