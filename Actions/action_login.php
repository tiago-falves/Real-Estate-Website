<?php
 include_once('../session/session.php');
 include_once('../database/database.php');
 include_once('../database/queries.php');

  if(isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/main_page.php'));
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (checkUserCredentials($_POST['username'], $_POST['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = "Login Successful!";
  } else {
      echo("Para de tentar entrar no site oh boi");
      $_SESSION['error_messages'][] = "Login Failed!";
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
