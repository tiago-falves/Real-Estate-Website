<?php
    include_once('database.php');

    function insertHome($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Home Values(NULL, ?, ?, ?, 0, ?, ?, ?, ?, ?)');
        $statement->execute(array($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id));
    }

    function insertLocation($name){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Location Values(NULL,?)');
        $statement->execute(array($name));
    }

    function insertUser($username, $password) {
        $db = Database::instance()->db();
        
        $satement = $db->prepare('INSERT INTO user VALUES(NULL, ?, NULL, ?)');
        $satement->execute(array($username, password_hash($password, PASSWORD_DEFAULT, $options)));
      }
?>