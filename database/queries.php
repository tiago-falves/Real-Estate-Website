<?php
    include_once('database.php');

    function getUserFromId($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM User WHERE id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }
    
    function getUserFromUserName($user_name){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM User WHERE user_name = ?');
        $statement->execute(array($user_name));
        return $statement->fetchAll();
    }

    function getHomeFromId($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
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