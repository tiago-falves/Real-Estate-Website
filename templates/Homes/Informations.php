<?php
  include_once('../session/session.php');
?>
<section id="Informations">
  <article class = Description>
      <header>
          <h2>Description</h2>
      </header>
      <p><?php echo $house['description'] ?></p>
  </article>
  <?php drawCharacteristics($characetristics);?>
  <!-- <img src="../Images/location.JPG" alt="Location"> -->
  <p><a href="profile.php?id=<?php echo $house['owner'];?>"> Owner</a></p>
  
   <!-- To do: Passar mais argumentos! -->
  <form method="post" action="../Actions/action_rent_house.php?id=<?php echo $idHouse; ?>&csrf=<?php echo $_SESSION['csrf']?>">

    <input type="date" name="start_date" value="2020-01-01">
    <input type="date" name="end_date" value="2020-01-01">
    <input type="submit" name="submit" value="Rent Now!" >
  </form>

  
  
  <?php  draw_comments($comments);
    include_once("../templates/messages.php");?>

</section>