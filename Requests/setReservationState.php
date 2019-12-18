<?php
   include_once('../database/queries.php');
 include_once('../database/inserts.php');
 include_once('../session/session.php');

  $user = getUserFromUserName($_SESSION['username']);
  $reservation = $_POST['reservation'];
  $state = $_POST['state'];

  if (authorizedToAccept($user['id'],$reservation) == false){ 
      error_log("False");
  }
  else{ 
    error_log("True");
    if($state == 'ACCEPTED'){
        error_log("Accepted");
        acceptReservation($reservation);
    }
    else{
      error_log("Refused");
        refuseReservation($reservation);
    }
  }
?>