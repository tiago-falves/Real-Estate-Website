<?php
    include_once('database.php');
    
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
        $statement = $db->prepare('SELECT * FROM Home ORDER BY rating');
        $statement->execute();
        return $statement->fetchAll();
    }

    function getPremiumHouse($rating){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where rating > ? ORDER BY rating');
        $statement->execute(array($rating));
        return $statement->fetch();
    }

    function getHouseBetweenPrices($smallerPrice,$higherPrice){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where price > ? AND price < ? ORDER BY rating');
        $statement->execute(array($smallerPrice,$higherPrice));
        return $statement->fetch();
    }

    function getHouseByLocation($location){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * from  Home, Location where Location.id = Home.location AND Location.name = ?');
        $statement->execute(array($location));
        return $statement->fetch();
    }
   

    function getHouseByType($type){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where type = ? ORDER BY rating');
        $statement->execute(array($type));
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
    function getPhotosFromHouse($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT PHOTO.ID FROM PHOTO,HOME WHERE PHOTO.HOME = HOME.ID AND HOME.ID = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }
    function getPathFromPhoto($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT PHOTO.ID FROM PHOTO,HOME WHERE PHOTO.HOME = HOME.ID AND HOME.ID = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function getPathsFromHouse($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT PATH FROM HOME,PHOTO,IMAGE WHERE HOME.ID = ? AND PHOTO.HOME = HOME.ID AND PHOTO.IMAGE = IMAGE.ID;');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function getUsernameFromOwner($house){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT userName FROM PERSON,HOME WHERE HOME.ID = ? AND HOME.OWNER = PERSON.ID');
        $statement->execute(array($house['id']));
        return $statement->fetch();
    }

    

    

    function checkUserCredentials($user_name, $password){
        $user = getUserFromUserName($user_name);
        return $user !== false && password_verify($password, $user['password']);
    }
?>