<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/inserts.php');
  include_once('../database/queries.php');

  $username = $_SESSION['username'];

  
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
 

  
  
  //Porque a PDO EXCEPTION?
  try {
    //Mudar para localização decente
    insertHome($title, $price,$description,$type,$bedrooms,$adress,$location['id'],$user['id'],$characteristics);
    $_SESSION['success_messages'][] = 'Home added successfully!';
    //header('Location: ../Imobiliaria/main_page.php');
    
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to add Home!';
    //header('Location: ../Imobiliaria/register.php');
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
