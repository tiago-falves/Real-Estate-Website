<?php
    include_once('../database/database.php');

    function insertUser($username, $password) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO Person  VALUES (NULL, ?, 1, ?, "", 1, "", 0)');
        $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));
    } 

    function insertUserHomePhoto($id,$image,$home){
        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO Image  VALUES (NULL, ?)');
        $stmt->execute(array($image));
        $stmt = $db->prepare('SELECT id FROM IMAGE WHERE path = ?');
        $stmt->execute(array($image));
        $imageId = $stmt->fetch();

        $stmt = $db->prepare('INSERT INTO Photo  VALUES (?, 1,?,?,?)');
        $stmt->execute(array(NULL,$imageId,$id,$home));
    }
    function insertUserPhoto($id, $image) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO Image  VALUES (NULL, ?, 1, ?, "", 1, "", 0)');
        $stmt->execute(array($image));
        $stmt = $db->prepare('SELECT id FROM IMAGE WHERE path = ?');
        $stmt->execute(array($image));
        $imageId = $stmt->fetch();
        $statement = $db->prepare('UPDATE User SET profilePicture = ? WHERE id = ?');
        $statement->execute(array($imageId,$id));
    } 

    function insertHome($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Home Values(NULL, ?, ?, ?, 0, ?, ?, ?, ?, ?)');
        $statement->execute(array($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id));
    }

    function insertReservation($start_date, $end_date, $userId, $home){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Reservation Values(NULL,?,?,?,?)');
        $statement->execute(array($start_date, $end_date, $userId, $home));
    }

    function insertLocation($name){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Location Values(NULL,?)');
        $statement->execute(array($name));
    }

    function updateUserProfile($id, $title, $location, $description){
        $db = Database::instance()->db();

        $statement = $db->prepare('UPDATE User SET title = ?, location = ?, description = ? WHERE id = ?');
        $statement->execute(array($title, $location, $description, $id));
    }
?>