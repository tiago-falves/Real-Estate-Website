<?php
  include('../templates/common/Header.php');  
  include('../database/queries.php');

 $idHouse = 1; //TEMPORARIO
 $house = getHomeFromId($idHouse);
 $characetristics = getHouseCharacteristics($idHouse);
 
?>
<section id="photos">
  <header>
    <h2><a href="item.php"><?php echo $house['title'] ?></a></h2>
  </header>
  <section id = "HomeImages">
      <img id = "BigPhoto" src="../Images/ribeirah.jpg" alt="House1">
      <div id = "SmallerPhotos">
        <img src="../Images/manson.jpg" alt="House1">
        <img src="../Images/manson.jpg" alt="House2">
        <img src="../Images/manson.jpg" alt="House3">
        <img src="../Images/manson.jpg" alt="House4">

      </div>
  </section>
</section>
<section id="Informations">
  <article class = Description>
      <header>
          <h2>Description</h2>
      </header>
      <p><?php echo $house['description'] ?></p>
      
  </article>
  
  <section id = Characteristics>
      <header><h3>Characteristics</h3></header>
      <?php foreach ($characetristics as $char ) {?> 
        <input type="checkbox"  value="Remember me"><?php echo $char ?><br>
      <?php } ?>
      <!-- <input type="checkbox"  value="Remember me"> Cinema<br>
      <input type="checkbox"  value="Remember me"> Garage<br>
      <input type="checkbox"  value="Remember me"> Air conditioning<br>
      <input type="checkbox"  value="Remember me"> Basement to put corpses<br> -->
  </section>
  <img src="../Images/location.JPG" alt="Location">
  <button>Rent Now!</button>
</section>

<?php
  include('../templates/common/Footer.php');  
?>