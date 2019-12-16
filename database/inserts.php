<?php
    include_once('../database/database.php');

    function insertUser($username, $password) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO Person  VALUES (NULL, ?, 4, ?, "", 1, "", 0)');
        $options = ['cost' => 8];
        error_log("User-Pass: ".$username."-".$password);
        $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT, $options)));
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

    function insertHome($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id,$characteristics){
        $db = Database::instance()->db();
        $statement = $db->prepare('INSERT INTO Home Values(NULL, ?, ?, ?, 0, ?, ?, ?, ?, ?,?)');
        $statement->execute(array($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id,$characteristics));
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
    function insertComment($title,$date,$hour,$content,$userId,$houseId,$rating){
        $db = Database::instance()->db();
        $statement = $db->prepare(' INSERT INTO COMMENT VALUES(NULL,?,?,?,?, ?,?,?)');
        $statement->execute(array($title,$date,$hour,$content,$userId,$houseId,$rating));
    }

    function updateUserProfile($id, $title, $location, $description){
        $db = Database::instance()->db();

        $statement = $db->prepare('UPDATE Person SET title = ?, userLocation = ?, userDescription = ? WHERE id = ?');
        $statement->execute(array($title, $location, $description, $id));
    }
    function updateHome($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id,$characteristics,$id){
        
        $db = Database::instance()->db();
        $statement = $db->prepare('UPDATE Home Set  title = ?, price = ?, description = ? , type = ?, bedrooms = ?, address =  ?, location = ?, owner = ?, characteristics = ? WHERE id = ?');
        $statement->execute(array($title, $price, $description, $type, $bedrooms, $address, $location_id, $owner_id,$characteristics,$id));
    }
    function deleteHome($id){   
        $db = Database::instance()->db();
        $statement = $db->prepare('DELETE FROM Home WHERE id = ?');
        $statement->execute(array($id));
    }

    function changeUserPassword($id, $newPassword){
        $db = Database::instance()->db();
        $stmt = $db->prepare('UPDATE Person SET password_hash = ?');
        $options = ['cost' => 8];
        error_log("User-Pass: ".$username."-".$password);
        $stmt->execute(array(password_hash($password, PASSWORD_DEFAULT, $options)));
    
    }
?>