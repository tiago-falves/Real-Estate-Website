
<?php 
    include_once('../session/session.php');
    include('../database/queries.php');
    include('../database/inserts.php');


    if(!isset($_SESSION['username'])){
        die(header('Location: ../Imobiliaria/login.php'));
    }
    $profile =  getUserFromUserName($_SESSION['username']);
    var_dump($profile);
    $idHouse = $_GET['id']; 
    $start_date = $_POST['start_date']; 
    $end_date = $_POST['end_date']; 

    //Verificar as datas todas, se a segunda e maior que a primeira, se ja esta reservado etc

    insertReservation($start_date,$end_date,$profile['id'],$idHouse);
  ?>