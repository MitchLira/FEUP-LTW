<?php
    include_once('../database/connection.php');
    include_once('../database/user.php');

    $user = getUser($dbh, $_SESSION['username']);
    echo json_encode(password_verify($_GET['password'], $user['password']));
?>