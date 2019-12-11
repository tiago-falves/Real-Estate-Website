<?php
    include_once('../database/database.php');
    
    function getUserFromId($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Person WHERE id = ?');
        $statement->execute(array($id));
        return $statement->fetch();
    }
    function getPhotoFromUser($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT path FROM Person,Image WHERE Person.id = ? AND Person.profilePicture = Image.id');
        $statement->execute(array($id));
        return $statement->fetch();
    }

    function getUserFromUserName($user_name){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Person WHERE userName = ?');
        $statement->execute(array($user_name));
        return $statement->fetchAll();
    }

    function getHomeFromId($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE id = ?');
        $statement->execute(array($id));
        return $statement->fetch();
    }

    function getHouseCharacteristics($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT characteristics FROM Home WHERE id = ?');
        $statement->execute(array($id));
        $char =  $statement->fetch();
        $characteristics = reset($char);
        return explode(',',$characteristics);


    }

    function getAllHouses(){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home');
        $statement->execute();
        return $statement->fetch();
    }
    
    function getHomeFromTitle($title){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE title = ?');
        $statement->execute(array($title));
        return $statement->fetchAll();
    }

    function getHomeFromOwner($userId){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE owner = ?');
        $statement->execute(array($userId));
        return $statement->fetchAll();
    }

    function getLocations(){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Location');
        $statement->execute();
        return $statement->fetchAll();
    }

    function getLocationFromId($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Location WHERE id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function checkUserCredentials($user_name, $password){
        $user = getUserFromUserName($user_name);
        return $user !== false && password_verify($password, $user['password']);
    }
?>