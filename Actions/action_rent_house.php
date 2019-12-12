
<?php 
    include_once('../session/session.php');
    include('../database/queries.php');


    if(!isset($_SESSION['username'])){
        die(header('Location: login.php'));
    }
    $profile =  getUserFromUserName($_SESSION['username']);
    $idHouse = $_GET['id']; 
    $start_date = $_GET['start_date']; 
    $end_date = $_GET['end_date']; 

    //Verificar as datas todas, se a segunda e maior que a primeira, se ja esta reservado etc

    insertReservation($start_date,$end_date,$profile['id'],$idHouse);
  ?>