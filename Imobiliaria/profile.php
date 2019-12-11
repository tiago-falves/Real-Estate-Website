<?php
  include('../session/session.php');  
  include('../templates/profileHeader.php');  
  include_once('../templates/Homes/homeFunctions.php');
  include('../database/queries.php');
  include('../templates/comments.php');



  //$profile = getUserFromId($idUser);
  
if(isset($_GET['id'])){
    $idUser = $_GET['id']; //TEMPORARIO SUBSTITUIR POR VERSAO ACIMA
    $profile = getUserFromId($idUser);   
}
else{
    $profile = getUserFromUserName($_SESSION['username']);
}
    
$profilePicture = getPathsFromPerson($profile['id']);
$homes = getHomesFromOwner($profile['id']);

 
?>
    <div id = "profile">
        <header>
            <h2><?php echo $profile['userName'] ?></h2>
            <p class="title"><?php echo $profile['title'] ?></p>
            <!-- <p>Harvard University</p> -->
        </header>
        <img src= '../Images/<?php echo $profilePicture['path']; ?>' alt="Ribeira"> 
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
            <?php draw_homes($homes);?>
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
<?php include('../templates/profileHeader.php');?>  
