<?php
  include('../templates/profileHeader.php');  
  include('../database/queries.php');

 $idUser = 1; //TEMPORARIO

  $profile = getUserFromId($idUser);
  $profilePicture = getPhotoFromUser($idUser);
 
?>
    <div id = "profile">
      <header>
            <h1>Edit Profile</h1>
      </header>
      <img src= '../Images/restivo.jpg' alt="Ribeira"> <?php //echo $profilePicture; ?>
      <!-- <h2><?php echo $profile['userName'] ?></h2>
            <p class="title"><?php echo $profile['title'] ?></p> -->

      <form method="post" action="">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="password" placeholder="Password" >
        <textarea name="Description" rows="8" placeholder="Description"></textarea>
        <!-- <input type="textarea"  name="Description" placeholder="Description" > -->
        <input type="submit" value="Submit">
    </form>
    </div>
<?php include('../templates/common/Footer.php');?>

<!-- ONLY CHANGE IN DATABASE IF ALTERED -->
<!-- $("form :input").change(function() {
  $(this).closest('form').data('changed', true);
});
$('#mybutton').click(function() {
  if($(this).closest('form').data('changed')) {
     //do something
  }
}); -->