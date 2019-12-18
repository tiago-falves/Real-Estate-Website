<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/inserts.php');
  include_once('../database/queries.php');
  
  if(!isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/login.php'));
  }

  $username = $_SESSION['username'];
  $user = getUserFromUserName($username);
  
  $title = $_POST['Title'];
  $houseId = $_GET['id'];
  $rating = $_POST['Rating'];
  $content = $_POST['comment'];

  date_default_timezone_set('Europe/Lisbon');
  $date = date('Ymd', time());
  $hour = date('hi', time());
  
  try {
    insertComment($title,$date,$hour,$content,$user['id'],$houseId,$rating);
    $_SESSION['success_messages'][] = 'Comment added successfully!';
    clearMessages();
    
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to add Comment';
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
