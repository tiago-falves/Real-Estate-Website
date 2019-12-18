<?php
  include_once('../session/session.php');
  include_once('../templates/Homes/homeFunctions.php');
  include_once('../database/queries.php');
  include_once('../templates/common/Header.php');  

  $type = $_POST['searchType'];
  if($type != 'title' && $type != 'rating' && $type != 'price' && $type != 'location'){
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  $value = $_POST['searchHouses'];

  $homes = array();

  if($type == 'title'){
      $homes = getHousesBySimilarTitles($value);
  }

  if($type == 'rating'){
      $homes = getPremiumHouses($value);
  }

  if($type == 'price'){
      $homes = getHousesUnderPrice($value);
  }

  if($type == 'location'){
      $homes = getHousesByLocation($value);
  }

  if($homes !== false){
    draw_homes($homes);
  }
  else{ ?>
    <div id="ListHouses">
        <p> No results found.</p>
    </div>
    <?php
  }

  include('../templates/common/Footer.php');  
?>