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
  
//Porque que ele nao esta a desenhar todos os parametros???>
  <section class = House>
    <header>
        <h3><?php echo $home['title']?></h3>
        <h4>Price: <?php echo $home['price']?></h4>
    </header>
    <p><?php $home['description']?></p>
    <button onclick="myFunction()" id="seeMore2">More Info</button>
    <footer>
        <span class="author"><? echo $home['owner'] /*Vai ter que ter aqui uma funçao get owner by id*/?></span>
    </footer>
    <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
  </section>   
<?php } ?>




