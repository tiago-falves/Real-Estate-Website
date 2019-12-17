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
        return $statement->fetch();
    }

    //O que e que este fazia mesmo?
    function getProfilePic($id){
        $db = Database::instance()->db();
        //$statement = $db->prepare('SELECT PATH FROM Person,PHOTO,IMAGE WHERE Person.ID = ? AND PHOTO.uploader_id = Person.ID AND PHOTO.IMAGE = IMAGE.ID;');
        $statement = $db->prepare('SELECT PATH FROM Person,IMAGE WHERE Person.ID = ? AND IMAGE.id = Person.profilePicture');
        $statement->execute(array($id));
        return $statement->fetch();
    }
    function getUsernameFromId($id){
        $db = Database::instance()->db();
        //$statement = $db->prepare('SELECT PATH FROM Person,PHOTO,IMAGE WHERE Person.ID = ? AND PHOTO.uploader_id = Person.ID AND PHOTO.IMAGE = IMAGE.ID;');
        $statement = $db->prepare('SELECT userName FROM Person WHERE Person.ID = ?');
        $statement->execute(array($id));
        return $statement->fetch();
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
        $statement = $db->prepare('SELECT * FROM Home ORDER BY rating DESC');
        $statement->execute();
        return $statement->fetchAll();
    }

    function getPremiumHouse($rating){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where rating > ? ORDER BY rating DESC');
        $statement->execute(array($rating));
        return $statement->fetch();
    }

    function getHouseBetweenPrices($smallerPrice,$higherPrice){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where price > ? AND price < ? ORDER BY rating DESC');
        $statement->execute(array($smallerPrice,$higherPrice));
        return $statement->fetch();
    }

    function getHouseByLocation($location){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * from  Home, Location where Location.id = Home.location AND Location.name = ? ORDER BY rating DESC');
        $statement->execute(array($location));
        return $statement->fetch();
    }
   

    function getHouseByType($type){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home Where type = ? ORDER BY rating DESC');
        $statement->execute(array($type));
        return $statement->fetch();
    }
    
    function getHomeFromTitle($title){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE title = ? ORDER BY rating DESC');
        $statement->execute(array($title));
        return $statement->fetchAll();
    }

    function getHomesFromOwner($userId){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Home WHERE owner = ? ORDER BY rating DESC');
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
        return $statement->fetch();
    }
    
    function getLocationFromName($name){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Location WHERE name = ?');
        $statement->execute(array($name));
        return $statement->fetch();
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

    function getReservationsUserHouses($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT *  FROM Person, Reservation,Home WHERE Person.id = ? AND Home.owner = Person.id AND Reservation.home = home.id');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function getClientReservations($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT * FROM Person, Reservation WHERE Person.id = ? AND Reservation.userID = Person.id');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }
    
    function getPendingReservationsFromOwner($owner){
        $db = Database::instance()->db();

        $user = getUserFromUserName($owner);

        $statement = $db->prepare("SELECT Reservation.id AS RESERVATION_ID, Reservation.home AS HOME_ID, title, start_date, end_date
                                    FROM Reservation, Home
                                    WHERE Home.owner = ? AND Home.id = Reservation.home AND Reservation.approved = 'PENDING'
                                    ORDER BY Reservation.start_date DESC");

        $statement->execute(array($user['id']));

        return $statement->fetchAll();
    }

    function getReservationOwner($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT home.owner FROM Reservation,Home WHERE reservation.id  = ? AND reservation.home = home.id');
        $statement->execute(array($id));
        return $statement->fetch();
    }

    function getHouseReservations($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT Reservation.id,start_date,end_date,userId,home FROM Home, Reservation WHERE home.id = ? AND Reservation.home = home.id');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function getHouseComments($id){
        $db = Database::instance()->db();
        $statement = $db->prepare('SELECT Comment.id, Comment.title, date, hour, content, commenter_id FROM Comment,Home WHERE Comment.home_id = home.id AND home.id = ?');
        $statement->execute(array($id));
        return $statement->fetchAll();
    }

    function authorizedToAccept($userId, $reservation){
        $db = Database::instance()->db();

        $statement = $db->prepare("SELECT Reservation.id AS RESERVATION_ID, Reservation.home AS HOME_ID, title, start_date, end_date
                                    FROM Reservation, Home
                                    WHERE Home.owner = ? AND Home.id = Reservation.home AND Reservation.approved = 'PENDING'
                                    ORDER BY Reservation.start_date DESC");

        $statement->execute(array($userId));

        return $statement->fetchAll();
    }
    
    function checkUserCredentials($user_name, $password){
        $user = getUserFromUserName($user_name);
        error_log("User:".$user['id']);
        return $user !== false && password_verify($password, $user['password_hash']);
    }
?>