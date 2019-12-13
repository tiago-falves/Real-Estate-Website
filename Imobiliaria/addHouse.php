<?php
  include_once('../session/session.php');
  include('../templates/common/Header.php');  
  include('../database/queries.php');




  if(!isset($_SESSION['username'])){
    die(header('Location: login.php'));
  }

  $profile =  getUserFromUserName($_SESSION['username']);


 
  $housePicture = array("path" =>"noProfile.png");
  


  
?>
    <div id = "profile">
      <header>
            <h1>Add new House</h1>
      </header>
      <img src= '../Images/<?php echo $housePicture['path'];?>' alt="Casa"> <?php //echo $//housePicture; ?>
      <section>
          <!-- Mudar este form todo -->
        <form action="../templates/user/upload.php" method="post" enctype="multipart/form-data">
          Select image to upload:
          <input type="hidden" name="username" value="<?php ?>">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
        </form>
      </section>
      
      

      <form method="post" action="../Actions/action_add_house.php">
        <input type="text" name="title" placeholder="House Title">
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="type" placeholder="Type(House,Apartment)">
        <input type="text" name="bedrooms" placeholder="Bedrooms(T1...T5)">
        <input type="text" name="adress" placeholder="Adress">
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="characteristics" placeholder="Characteristics">
        <!-- Se calhar aqui nas characteristics podia implementar se um menu dropdown em que so se pode escolher entre certas opçoes -->
        <textarea name="description" rows="8" placeholder="Description"></textarea>
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