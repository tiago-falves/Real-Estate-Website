
<?php 
    include_once('../session/session.php');
    include('../database/queries.php');
    include('../database/inserts.php');


    if(!isset($_SESSION['username'])){
        die(header('Location: ../Imobiliaria/login.php'));
    }
    //Gets current user
    $profile =  getUserFromUserName($_SESSION['username']);
    
    //Gets all variables sent by the other page
    $idHouse = $_GET['id']; 
    $start_date = $_POST['start_date']; 
    $end_date = $_POST['end_date']; 
    
    //Gets all the reservations of this house
    $reservations = getHouseReservations($idHouse);
    $canRent = true;

    //The start date has to be smaller than the end date
    if($start_date > $end_date){
      $_SESSION['error_messages'][] = "Invalid Dates";
      $canRent =false;
    }   
    else{
        foreach($reservations as $reservation){

            //Verifies if there is any reservation during the dates the user chose
            if(($start_date >= $reservation['start_date'] &&  $start_date <= $reservation['end_date']) || ($end_date >= $reservation['start_date'] &&  $end_date <= $reservation['end_date'])){
                $_SESSION['error_messages'][] = "The House is already full in this dates!";
                $canRent = false;
                break;  
            }
        }
    }

    if($canRent){
        //Inserts the Reservation in the database
        insertReservation($start_date,$end_date,$profile['id'],$idHouse);
        $_SESSION['success_messages'][] = 'House rented succssessfully!';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);

  ?>