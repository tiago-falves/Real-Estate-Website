<?php
  
  include_once('../database/database.php');
  include_once('../database/inserts.php');

  $idHouse = $_GET['id'];



  try {
    deleteHome($idHouse);
    $_SESSION['success_messages'][] = 'Home Removed successfully!';
      
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to delete Home!';
  }    
 

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
