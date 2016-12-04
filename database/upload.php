<?php 
    function uploadUserImage($dbh, $username){
        $stmt = $dbh->prepare('INSERT INTO images VALUES(?)');
        $stmt->execute(Array($username));
    }
?>