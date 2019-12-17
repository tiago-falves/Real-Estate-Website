<?php
 include_once('../database/queries.php');
 include_once('../session/session.php');

  $username = $_SESSION['username'];

  $data = array();
  $query_result = getPendingReservationsFromOwner($username);
  if ($query_result == false){ 
      error_log("False");   
  }
  else{ error_log("True");
    $index = 0;
    foreach($query_result as $reservation){
        array_push($data, array($reservation['RESERVATION_ID'], $reservation['HOME_ID'], $reservation['title'], $reservation['start_date'], $reservation['end_date']));
    }
  }
  header('Content-type: application/json');
  echo json_encode($data);
?>
