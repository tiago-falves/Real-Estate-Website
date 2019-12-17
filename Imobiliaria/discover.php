<?php
  include_once('../session/session.php');
  include_once('../templates/Homes/homeFunctions.php');
  include_once('../database/queries.php');
  include_once('../templates/common/Header.php');  

  $homes = getAllHouses();
  draw_homes($homes);

  include('../templates/common/Footer.php');  
?>