<?php function draw_homes($homes) {?>
  <div id="ListHouses">
    <h2>Homes</h2>
    <?php 
      foreach ($homes as $home){
        draw_home($home);
      }
    ?>
    <a href="">See All</a>            
  </div>
<?php } ?>


<?php function draw_home($home) {
  $id = $home['id'];  
  $paths = getPathsFromHouse($id);
  $firstPath = $paths[0];
  $owner = getUsernameFromOwner($home)
?>
  <section class = House>
    <header>
        <h3><?php echo $home['title']?></h3>
        <h4>Price: <?php echo $home['price']?></h4>
    </header>
    <p>Bedrooms: <?php echo $home['bedrooms']?></p>
    <p>Rating: <?php echo $home['rating'] //Adicionar umas estrelinhas giras?></p>
    <footer>
      <span class="Owner"><?php echo $owner['userName'] /*Vai ter que ter aqui uma funçao get owner by id*/?></span>
      <button onclick="myFunction()" id="seeMore2">More Info</button>
    </footer>
    <a href="home.php?id=<?php echo $id; ?>"><img src="../Images/<?=$firstPath['path'] ?>" alt="Casa 1"></a>
  </section>   
<?php } 

function drawHomePhotos($house,$images,$img) { ?>
  <section id="photos">
    <header>
      <h2><a href="item.php"><?php echo $house['title'] ?></a></h2>
    </header>
    <section id = "HomeImages">
      <img id = "BigPhoto" src="../Images/<?php echo $img['path'] ?>" alt="House1">
      <div id = "SmallerPhotos">
        <?php foreach ($images as $image ){?>
          <img src="../Images/<?php echo $image['path'] ?>" alt="House1">
        <?php }?>
      </div>
    </section>
  </section>
<?php } 


function drawCharacteristics($characetristics){?>
  <section id = Characteristics>
    <header><h3>Characteristics</h3></header>
    <?php foreach ($characetristics as $char ) {?> 
      <input type="checkbox"  value="Remember me"><?php echo $char ?><br>
    <?php } ?>
  </section>
<?php } ?>