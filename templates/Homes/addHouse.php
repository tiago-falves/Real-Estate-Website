
<?php 

if(!isset($_SESSION['username'])){
    die(header('Location: login.php'));
}



$profile =  getUserFromUserName($_SESSION['username']);
$housePicture = array("path" =>"noProfile.png");
if(isset($_GET['id'])){
    $images = getPathsFromHouse($_GET['id']);
    if(sizeof($images) != 0){
        $housePicture = $images[0];
    }
}

?>

<div id = "editHouse">
  <header>
    <?php
    if(isset($_GET['id'])){?>
      <h1>Edit House</h1><?php 
    }else{ ?>
      <h1>Add New House</h1><?php 
    } ?>
  
  </header>
  <img src= '../Images/<?php echo $housePicture['path'];?>' alt="Casa"> <?php //echo $//housePicture; ?>
  <section>
      <!--TODO Mudar este form todo -->
    <form action="../templates/user/upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="hidden" name="username" value="<?php ?>">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </section>

  <?php
    if(isset($_GET['id'])){?>
      <form method="post" action="../Actions/action_add_house.php?id=<?php echo $_GET['id'];?>"><?php 
    }else{ ?>
      <form method="post" action="../Actions/action_add_house.php"><?php 
    } ?>
  

  <form method="post" action="../Actions/action_add_house.php">
    <input type="text" name="title" placeholder="House Title" required>
    <input type="number" name="price" placeholder="Price" required>
    <!-- <input type="text" name="type" placeholder="Type(House,Apartment)"> -->
    <select name="type" >
      <option value="House">House</option>
      <option value="Apartment">Apartment</option>
    </select>
    <select name="bedrooms">
      <option value="T1">T1</option>
      <option value="T2">T2</option>
      <option value="T3">T3</option>
      <option value="T4">T4</option>
      <option value="T5">T5+</option>
    </select>
    <!-- <input type="text" name="bedrooms" placeholder="Bedrooms(T1...T5)"> -->
    <input type="text" name="adress" placeholder="Adress" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="text" name="characteristics" placeholder="Characteristics (Bathroom,cinema,etc...)" required>
    <!-- Se calhar aqui nas characteristics podia implementar se um menu dropdown em que so se pode escolher entre certas opçoes -->
    <textarea name="description" rows="8" placeholder="Description" required></textarea>
    <input type="submit" value="Submit">
  </form>
  <?php include_once("../templates/messages.php");?>
</div>