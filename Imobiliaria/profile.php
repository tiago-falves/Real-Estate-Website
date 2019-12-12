<?php
  include_once('../session/session.php');  
  include_once('../templates/profileHeader.php');  
  include_once('../templates/Homes/homeFunctions.php');
  include_once('../templates/reservations.php');
  include_once('../database/queries.php');
  include_once('../templates/comments.php');



  //$profile = getUserFromId($idUser);
  
if(isset($_GET['id'])){
    $idUser = $_GET['id']; 
    $profile = getUserFromId($idUser);   
}
else{
    $profile = getUserFromUserName($_SESSION['username']);
}
    
$profilePicture = getProfilePic($profile['id']); 
  if($profilePicture == false){
    $profilePicture = array("path" =>"noProfile.png");
  }
$homes = getHomesFromOwner($profile['id']);
$reservations = getReservationsFromPerson($profile['id']);


 
?>
    <div id = "profile">
        <header>
            <h2><?php echo $profile['userName'] ?></h2>
            <p class="title"><?php echo $profile['title'] ?></p>
            <!-- <p>Harvard University</p> -->
        </header>
        <img src= '../Images/<?php echo $profilePicture['path']; ?>' alt="ProfilePicture"> 
        <section id = "rating">
            <h2><?php echo $profile['rating'] ?> stars</h2>
        </section>
        <article class = Description>
            <header>
                <h2>Description</h2>
            </header>
            <p><?php echo $profile['userDescription'] ?></p>
        </article>
      
        <?php draw_comments();?>
    
        <div id="RecentVisits">
            <header>
                <h2>Houses of this user</h2>
            </header>
            <?php draw_homes($homes);
            draw_reservations($reservations);  ?>
            
            <!-- <section id = "HomesProfile">
                 <div class = "SmallerPhotosCollumn">
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 2"></a>
                    </section>
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 3"></a>                
                    </section>
                </div>
                <div class = "SmallerPhotosCollumn">
         
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 3"></a>
                    </section>
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 4"></a>                
                    </section>
                </div>
            </section> 
            
            <a href="">See All</a>            
        </div>-->
<?php include_once('../templates/common/Footer.php');?>  
