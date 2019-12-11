<?php
  include_once('../session/session.php');
  include('../templates/profileHeader.php');  
  include('../database/queries.php');




  if(!isset($_SESSION['username'])){
    die(header('Location: login.php'));
  }

  $profile =  getUserFromUserName($_SESSION['username']);

  $profilePicture = getPathsFromPerson($profile['id']); 
  if($profilePicture == false){
    $profilePicture = array("path" =>"noProfile.png");
  }


  
?>
    <div id = "profile">
      <header>
            <h1>Edit Profile</h1>
            <h2><?php echo $_SESSION['username']; ?></h2>
            <h3><?php echo $profile['title'] ?></p></h3>
      </header>
      <img src= '../Images/<?php echo $profilePicture['path'];?>' alt="Ribeira"> <?php //echo $//profilePicture; ?>
      <section>
        <form action="../templates/user/upload.php" method="post" enctype="multipart/form-data">
          Select image to upload:
          <input type="hidden" name="username" value="<?php ?>">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
        </form>
      </section>
      
      

      <form method="post" action="../Actions/action_change_profile.php">
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="title" placeholder="Occupation">
        <input type="password" name="password" placeholder="Password" >
        <input type="password" name="newPassword" placeholder="New Password" >
        <input type="password" name="confirmPassword" placeholder="Confirm Passowrd" >
        <textarea name="description" rows="8" placeholder="Description"></textarea>
        <!-- <input type="textarea"  name="Description" placeholder="Description" > -->
        <input type="submit" value="Submit">
    </form>
    <section id="messages">
      <?php $errors = getErrorMessages();foreach ($errors as $error) { ?>
      <article class="error">
        <p><?=$error?></p>
      </article>
      <?php } ?>
      <?php $successes = getSuccessMessages();foreach ($successes as $success) { ?>
      <article class="success">
        <p><?=$success?></p>
      </article>
      <?php } clearMessages(); ?>
  </section>
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