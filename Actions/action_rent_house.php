
<?php 
    include_once('../session/session.php');
    include('../database/queries.php');
    include('../database/inserts.php');


    if(!isset($_SESSION['username'])){
        die(header('Location: ../Imobiliaria/login.php'));
    }
    $profile =  getUserFromUserName($_SESSION['username']);
    
    $idHouse = $_GET['id']; 
    $start_date = $_POST['start_date']; 
    $end_date = $_POST['end_date']; 
    
    //Verificar as datas todas, se a segunda e maior que a primeira, se ja esta reservado etc
    $reservations = getHouseReservations($idHouse);
    $canRent = true;

    if($start_date > $end_date){
      echo("Invalid Dates");
      $_SESSION['error_messages'][] = "Invalid Dates";
      $canRent =false;
    }   
    else{
        foreach($reservations as $reservation){
            if(($start_date >= $reservation['start_date'] &&  $start_date <= $reservation['end_date']) || ($end_date >= $reservation['start_date'] &&  $end_date <= $reservation['end_date'])){
                echo("Ja esta reservada nessas datas");
                $_SESSION['error_messages'][] = "The House is already full in this dates!";
                $canRent = false;
                break;  
            }
        }
    }

    if($canRent){
        insertReservation($start_date,$end_date,$profile['id'],$idHouse);
        echo("Zas");
        $_SESSION['success_messages'][] = 'House rented succssessfully!';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);

  ?>