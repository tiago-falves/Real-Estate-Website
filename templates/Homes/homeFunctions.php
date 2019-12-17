<?php
include_once("../session/session.php");

function draw_homes($homes) {?>
  
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
  if(!empty($paths)){
    $firstPath = $paths[0];
  } else{
    $firstPath['path'] = "noProfile.png";
  }
  $owner = getUsernameFromOwner($home);
  
 
?>
  <section class = House>
    <div class="imageZoomContainer">
      <a href="home.php?id=<?php echo $id; ?>"><img class= "cover" src="../Images/<?=$firstPath['path'] ?>" alt="Casa 1"></a>
    </div>
    <section id = HouseInfo>
      <header>
          <h3><?php echo $home['title']?></h3>
          <h4>Price: <?php echo $home['price']?></h4>
      </header>
      <p>Bedrooms: <?php echo $home['bedrooms']?></p>
      <p>Rating: <?php echo $home['rating'] //Adicionar umas estrelinhas giras?></p>
        <span  class="Owner"> <a href="profile.php?id=<?php echo $home['owner'];?>">Owner:  <?php echo $owner['userName']?></a></span>
        <?php
      // echo( $owner);
      if(isset($_SESSION['username'])){       
       if($_SESSION['username'] == $owner['userName'] ) { ?>
          <button onclick="location.href = 'addHouse.php?id=<?php echo $home['id']; ?>'" type="button">Edit house</button>
          <button onclick="location.href = '../Actions/action_remove_house.php?id=<?php echo $home['id']; ?>'" type="button">Remove House</button>
        <?php }
        } ?>
    </section>
  </section>   
<?php } 

function drawHomePhotos($house,$images,$img) { ?>
  <section id="photos">
    <header>
      <h2><a href="item.php"><?php echo $house['title'] ?></a></h2>
    </header>
      <div class="slideShow">
        <div class= "imageZoomContainer">
          <img class="cover" id = "Slide" src="../Images/<?php echo $img['path'] ?>" alt="House1">
        </div>
        <?php foreach ($images as $image ){?>
          <div class= "imageZoomContainer">
              <img class="cover" id= "Slide" src="../Images/<?php echo $image['path'] ?>" alt="House1">
          </div>
        <?php }?>         
        <a class="arrowLeft" onclick="addSlide(-1)">&#10094;</a>
        <a class="arrowRight" onclick="addSlide(1)">&#10095;</a>
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
<?php } 


function draw_main_home($homes,$id){ ?>
  <section class = "Home">
    <?php $home = $homes[$id];
    $location = getLocationFromId($home['location']);
    $images = getPathsFromHouse($home['id']);?>
    <header>
        <!-- <h3><?php echo $home['title']; ?></h3> -->
        <h3><?php echo $home['price']; ?></h3>
        <h4><?php echo $location['name']; ?></h4>
    </header>
    <a href="home.php?id=<?php echo $home['id']; ?>">
      <div class="imageZoomContainer">
        <img class="cover" src="../Images/<?php echo $images[0]['path'];?>" alt="Casa">
      </div>
    </a>
</section>
<?php } ?>