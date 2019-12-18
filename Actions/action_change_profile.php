<?php
  include_once('../session/session.php');
  include_once('../database/database.php');
  include_once('../database/queries.php');
  include_once('../database/inserts.php');

  
  if(!isset($_SESSION['username'])){
    die(header('Location: ../Imobiliaria/login.php'));
  }

  $username = $_SESSION['username'];
  
  $user = getUserFromUserName($username);

  $new_title = $_POST['title'];
  if(strcmp($new_title,"") == 0){
    $new_title = $user['title'];
  }

  $new_location = getLocationFromName($_POST['location']);
  $new_location_id;
  if($new_location == false){
    $new_location_id = $user['userLocation'];
  }
  else{
    $new_location_id = $new_location['id'];
  }

  $new_description = $_POST['description'];
  if(strcmp($new_description,"") == 0){
    $new_description = $user['userDescription'];
  }
  
  updateUserProfile($user['id'], $new_title, $new_location_id, $new_description);
  
  $password = $_POST['password'];
  $new_password = $_POST['newPassword'];
  $confirmed_password = $_POST['confirmPassword'];

  if(strcmp($password,"") != 0 && strcmp($new_password,"") != 0 && strcmp($confirmed_password, "") != 0){
    if (!checkUserCredentials($username, $password)) {
      $_SESSION['error_messages'][] = "Invalid password";
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }
  
  
    if(strcmp($new_password, $confirmed_password) != 0){
      $_SESSION['error_messages'][] = "New password does not match the confirmation";
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }

    changeUserPassword($user['id'], $new_password);
  }

  //Fazer com que ele atualize a foto de perfil, javascript?

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
