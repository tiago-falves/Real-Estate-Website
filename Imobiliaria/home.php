<?php
  include('../templates/common/Header.php');  
?>
<section id="photos">
  <header>
    <h2><a href="item.php">The Dream House</a></h2>
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
      <p>Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin blandit ex sit amet suscipit commodo. Duis molestie ligula eu urna tincidunt tincidunt. Mauris posuere aliquet pellentesque. Fusce molestie libero arcu, ut porta massa iaculis sit amet. Fusce varius nisl vitae fermentum fringilla. Pellentesque a cursus lectus.</p>
      <p>Duis condimentum metus et ex tincidunt, faucibus aliquet ligula porttitor. In vitae posuere massa. Donec fermentum magna sit amet suscipit pulvinar. Cras in elit sapien. Vivamus nunc sem, finibus ac suscipit ullamcorper, hendrerit vitae urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque eget tincidunt orci. Mauris congue ipsum non purus tristique, at venenatis elit pellentesque. Etiam congue euismod molestie. Mauris ex orci, lobortis a faucibus sed, sagittis eget neque.</p>
      <p>Mauris tincidunt orci congue turpis viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque rhoncus lorem eget.</p>
  </article>
  
  <section id = Characteristics>
      <header><h3>Characteristics</h3></header>
      <input type="checkbox"  value="Remember me"> Bathroom<br>
      <input type="checkbox"  value="Remember me"> Cinema<br>
      <input type="checkbox"  value="Remember me"> Garage<br>
      <input type="checkbox"  value="Remember me"> Air conditioning<br>
      <input type="checkbox"  value="Remember me"> Basement to put corpses<br>
  </section>
  <img src="../Images/location.JPG" alt="Location">
  <button>Rent Now!</button>
</section>

<?php
  include('../templates/common/Footer.php');  
?>