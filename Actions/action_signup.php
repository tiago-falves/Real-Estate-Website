<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/inserts.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmed_password = $_POST['confirm_password'];
  
  if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
    $_SESSION['error_messages'][] = 'Username can only contain letters and numbers!';
    die(header('Location: ../Imobiliaria/register.php'));
  }

  if(strcmp($password, $confirmed_password) != 0){
    $_SESSION['error_messages'][] = $confirmed_password;
    die(header('Location: ../Imobiliaria/register.php'));
  }

  try {
    insertUser($username, $password);
    
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Signed up and logged in!';
    header('Location: ../Imobiliaria/main_page.php');
    
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['error_messages'][] = 'Failed to signup!';
    header('Location: ../Imobiliaria/register.php');
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
