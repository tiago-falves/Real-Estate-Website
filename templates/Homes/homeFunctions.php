<?php function draw_homes($homes) { 
  
?>
  
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


  
//Porque que ele nao esta a desenhar todos os parametros???>
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
    <a href="home.php"><img src="../Images/<?=$firstPath['path'] ?>" alt="Casa 1"></a>
  </section>   
<?php } ?>




