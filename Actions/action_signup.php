<?php
 include_once('../session/session.php');
 include_once('../database/database.php');


 $username = $_POST['username'];
 $password = $_POST['password'];


 function insertUser($username, $password) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO Person  VALUES (NULL, ?, 1, ?, "", 1, "", 0)');
    $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));

  } 



  if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
    die(header('Location: ../Imobiliaria/register.php'));
  }


  try {

    

    insertUser($username, $password);
    echo("ZAAAAAAAAAAAAAAAS");
    
    $_SESSION['username'] = $username;
    $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Signed up and logged in!');
    header('Location: ../Imobiliaria/main_page.php');
    
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Failed to signup!');
    header('Location: ../Imobiliaria/register.php');
  }



  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
