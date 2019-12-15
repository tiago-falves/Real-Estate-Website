<?php
  include_once('../templates/Homes/homeFunctions.php');  
  include_once('../templates/common/Header.php');  
  include_once('../database/queries.php');

  $idHouse = $_GET['id']; 
  $house = getHomeFromId($idHouse);
  $characetristics = getHouseCharacteristics($idHouse);
  $images = getPathsFromHouse($idHouse);
  $bigPhoto = $images[0];
  
  drawHomePhotos($house,$images,$bigPhoto);
?>


<section id="Informations">
  <article class = Description>
      <header>
          <h2>Description</h2>
      </header>
      <p><?php echo $house['description'] ?></p>
  </article>
  <?php drawCharacteristics($characetristics);?>
  <img src="../Images/location.JPG" alt="Location">
  
   <!-- To do: Passar mais argumentos! -->
  <form method="post" action="../Actions/action_rent_house.php?id=<?php echo $idHouse; ?>">

    <input type="date" name="start_date" value="2020-01-01">
    <input type="date" name="end_date" value="2020-01-01">
    <input type="submit" name="submit" value="Rent Now!" >
  </form>
  <?php  include_once("../templates/messages.php");?>

</section>

<?php
  include('../templates/common/Footer.php');  
?>