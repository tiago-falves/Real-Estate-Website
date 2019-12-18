<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/inserts.php');
  
  if(!isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/login.php'));
  }

  $username = $_SESSION['username'];
  
  $title = $_POST['Title'];
  $rating = $_POST['Rating'];
  $content = $_POST['comment'];

  date_default_timezone_set('Europe/Lisbon');
  $date = date('Ymd', time());
  $hour = date('hi', time());
  
  //Porque a PDO EXCEPTION?
  //Sera que deviamos mudar a date para outro formato?
  try {
    //Mudar para localização decente
    insertComment($title,$date,$hour,$content,$userId,$houseId,$rating);
    $_SESSION['success_messages'][] = 'Comment added successfully!';
    //header('Location: ../Imobiliaria/main_page.php');
    
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to add Comment';
    //header('Location: ../Imobiliaria/register.php');
  }

//   $comments = getCommentsAfterId($id, $comment_id);
//   echo json_encode($comments);

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
