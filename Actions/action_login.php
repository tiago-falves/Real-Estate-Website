<?php
 include_once('../session/session.php');
 include_once('../database/database.php');

  function setCurrentUser($username) {
    $_SESSION['username'] = $username;
  }


  function isLoginCorrect($username, $password) {

    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM Person WHERE userName = ? AND password_hash = ?');
    $stmt->execute(array($username, $password)); //sha1($password) Para Dar Hash a password
    return $stmt->fetch() !== false;
  }

  if (isLoginCorrect($_POST['username'], $_POST['password'])) {
    setCurrentUser($_POST['username']);
    echo("ZAAAAAAAAAAAS");
    $_SESSION['success_messages'][] = "Login Successful!";
  } else {
      echo("Para de tentar entrar no site oh boi");
      $_SESSION['error_messages'][] = "Login Failed!";
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
