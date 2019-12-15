<?php
  include_once('../templates/Homes/homeFunctions.php');  
  include_once('../templates/comments.php');  
  
  include_once('../templates/common/Header.php');  
  include_once('../database/queries.php');


  $idHouse = $_GET['id']; 
  $house = getHomeFromId($idHouse);
  $characetristics = getHouseCharacteristics($idHouse);
  $images = getPathsFromHouse($idHouse);

  if(!empty($images)){
    $bigPhoto = $images[0];
  } else{
    $bigPhoto['path'] = "noProfile.png";
  }
  
  drawHomePhotos($house,$images,$bigPhoto);

  $comments = getHouseComments($idHouse);
 
  include_once("../templates/Homes/Informations.php");
  include('../templates/common/Footer.php');  
?>