<?php
  include_once('../templates/Homes/homeFunctions.php');  
  include_once('../templates/comments.php');  
  
  include_once('../templates/common/Header.php');  
  include_once('../database/queries.php');
?>
<div class="PageContent">
  <?php
    $idHouse = $_GET['id']; 
    $house = getHomeFromId($idHouse);
    $characetristics = getHouseCharacteristics($idHouse);
    $images = getPathsFromHouse($idHouse);

    if(!empty($images)){
      $bigPhoto = $images[0];
    } else{
      $bigPhoto['path'] = "noProfile.png";
    }
    drawHomePhotos($house,$images,$bigPhoto);

    $comments = getHouseComments($idHouse);
  
    include_once("../templates/Homes/Informations.php");
  ?>
</div>
<script>
  var curSlide = 1;
  showSlide(curSlide);

  function addSlide(n) {
    showSlide(curSlide += n);
  }

  function showSlide(n) {
    var i;
    var x = document.getElementsByClassName("imageZoomContainer");
    if (n > x.length) {curSlide = 1}
    if (n < 1) {curSlide = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[curSlide-1].style.display = "block";  
  }
</script>
<?php
  include('../templates/common/Footer.php');  
?>
