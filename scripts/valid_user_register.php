<?php
    include_once('../database/connection.php');
    include_once('../database/user.php');

    $user = getUser($dbh, $_GET['username']);
    echo json_encode($user != false);
?>