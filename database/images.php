<?php
    function uploadUserImage($dbh, $username){
        $stmt = $dbh->prepare('INSERT INTO images_user VALUES(NULL, ?, ?)');
        $stmt->execute(array($username, $username));
    }

    function uploadRestImage($dbh, $idRestaurant, $title){
        $stmt = $dbh->prepare('INSERT INTO images_restaurant VALUES(NULL, ?, ?)');
        $stmt->execute(array($idRestaurant, $title));
    }

    function getUserImage($dbh, $username){
        $stmt = $dbh->prepare('SELECT title FROM images_user WHERE username = ?');
        $stmt->execute(array($username));

        return $stmt->fetch()['title'];
    }

    function getRestImages($dbh, $idRestaurant){
        $stmt = $dbh->prepare('SELECT title FROM images_restaurant WHERE idRestaurant = ?');
        $stmt->execute(array($idRestaurant));
        
        return $stmt->fetchAll();
    }
?>