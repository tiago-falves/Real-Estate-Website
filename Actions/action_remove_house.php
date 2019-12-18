<?php
  
  include_once('../database/database.php');
  include_once('../database/inserts.php');
  include_once('../database/queries.php');
  include_once('../session/session.php');
  
  if(!isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/login.php'));
  }

  $idHouse = $_GET['id'];
  $house = getHomeFromId($idHouse);
  if($house == false){
    $_SESSION['error_messages'][] = "Invalid house id!";
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  $user = getUserFromUserName($_SESSION['username']);

  if($_SESSION['csrf'] != $_GET['csrf']){
    $_SESSION['error_messages'][] = "Invalid session token!";
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  if($user['id'] != $house['owner']){
    $_SESSION['error_messages'][] = "Unauthorized action!";
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  try {
    deleteHome($idHouse);
    $_SESSION['success_messages'][] = 'Home Removed successfully!';
      
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to delete Home!';
  }    
  
  clearMessages();
 
  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
