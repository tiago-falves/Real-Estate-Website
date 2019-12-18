<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/inserts.php');
  include_once('../database/queries.php');
  
  if(!isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/login.php'));
  }

  $username = $_SESSION['username'];

  $successfullyEnded = true;
  
  $user = getUserFromUserName($username);
  
  $title = $_POST['title'];
  $price = $_POST['price'];
  $type = $_POST['type'];
  $bedrooms = $_POST['bedrooms'];
  $adress = $_POST['adress'];
  $location_name = $_POST['location'];
  $characteristics = $_POST['characteristics'];
  $description = $_POST['description'];

  $location =  getLocationFromName($location_name);
  if(!$location){
    insertLocation($location_name);
    $location = getLocationFromName($location_name);
  }
  
  $successfullyEnded = true;
 
  if(isset($_GET['id'])){

    try {
      updateHome($title, $price,$description,$type,$bedrooms,$adress,$location['id'],$user['id'],$characteristics,$_GET['id']);
      $_SESSION['success_messages'][] = 'Home edited successfully!';
      
    } catch (PDOException $e) {

      die($e->getMessage());
      $_SESSION['error_messages'][] = 'Failed to edit Home!';
      $successfullyEnded = false;
    }    
  }else{
    //Adding house
    try {
      insertHome($title, $price,$description,$type,$bedrooms,$adress,$location['id'],$user['id'],$characteristics);
      $_SESSION['success_messages'][] = 'Home added successfully!';
      
    } catch (PDOException $e) {

      die($e->getMessage());
      $_SESSION['error_messages'][] = 'Failed to add Home!';
      $successfullyEnded = false;
    }
  }

  if($successfullyEnded){
    clearMessages();
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
