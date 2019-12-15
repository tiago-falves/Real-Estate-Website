<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/queries.php');
  include_once('../database/inserts.php');

  $username = $_SESSION['username'];
  /*
  $password = $_POST['password'];

  if (!checkUserCredentials($username, $password)) {
    $_SESSION['error_messages'][] = "Invalid password";
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  $new_password = $_POST['newPassword'];
  $comfirmed_password = $_POST['confirmedPassword'];

  if(strcmp($new_password, $confirmedPassword) != 0){
    $_SESSION['error_messages'][] = "New password does not match the confirmation";
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }
  */

  //TO DO: Verificar password antes de submter
  //Fazer com que ele atualize a foto de perfil, javascript?

  $user = getUserFromUserName($username);
  $new_title = $_POST['title'];
  $new_location = getLocationFromName($_POST['location']);
  $new_description = $_POST['description'];
  
  updateUserProfile($user['id'], $new_title, $new_location['id'], $new_description);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
