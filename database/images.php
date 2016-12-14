<?php
    function uploadUserImage($dbh, $username){
        $stmt = $dbh->prepare('INSERT INTO images_user VALUES(NULL, ?, ?)');
        $stmt->execute(array($username, 'defaultPerfil'));
    }

    function updateUserImage($dbh, $username, $title){
        $stmt = $dbh->prepare('UPDATE images_user SET title = ? WHERE username = ?');
        $stmt->execute(array($title, $username));
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

    function getRestaurantImages($dbh, $idRestaurant){
        $stmt = $dbh->prepare('SELECT title FROM images_restaurant WHERE idRestaurant = ?');
        $stmt->execute(array($idRestaurant));
        
        return $stmt->fetchAll();
    }

    function getNumberOfImagesRestaurant($dbh, $idRestaurant){
        $stmt = $dbh->prepare('SELECT * FROM images_restaurant WHERE idRestaurant = ?');
        $stmt->execute(array($idRestaurant));
        $number = $stmt->fetchAll();
        
        return count($number);
    }
?>