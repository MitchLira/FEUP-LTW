<?php
    include_once('../database/connection.php');
    include_once('../database/user.php');

    $user = getUser($dbh, $_SESSION['username']);
    echo json_encode($user['password']==$_GET['password']);

?>