<?php
 include_once('../database/queries.php');

  $username = $_POST['username'];

  $data;
  if (getUserFromUserName($username) == false){ 
      error_log("False");   
    $data = ['result' => false];
  }
  else{ error_log("True");
    $data = ['result' => true];
  }
  header('Content-type: application/json');
  echo json_encode($data);
?>
