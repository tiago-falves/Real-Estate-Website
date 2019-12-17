<?php
  include('../templates/common/Header.php');  
  include('../templates/search.php');
  include_once('../templates/Homes/homes.php');
  include_once('../database/queries.php');

  $homes = getAllHouses();
  
  draw_best_offers($homes);
  include('../templates/common/Footer.php');  
?>