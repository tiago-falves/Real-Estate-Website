<section id="photos">
  <header>
    <h2><a href="item.php"><?php echo treatOutput($house['title']) ?></a></h2>
  </header>
  <section id = "HomeImages">
    <img id = "BigPhoto" src="../Images/<?php echo $img['path'] ?>" alt="House1">
    <div id = "SmallerPhotos">
      <?php foreach ($images as $image ){?>
        <img src="../Images/<?php echo $image['path'] ?>" alt="House1">
      <?php }?>
    </div>
</section>