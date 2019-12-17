<?php 
if(isset($_GET['id'])){
    $idUser = $_GET['id']; 
    $profile = getUserFromId($idUser);   
}else{
    $profile = getUserFromUserName($_SESSION['username']);
}
$profilePicture = getProfilePic($profile['id']); 

if($profilePicture == false){
    $profilePicture = array("path" =>"noProfile.png");
}

$homes = getHomesFromOwner($profile['id']);
$reservationsMyHouses = getReservationsUserHouses($profile['id']);
$myReservations = getClientReservations($profile['id']);?>

<div id = "profile">
    <img src= '../Images/<?php echo $profilePicture['path']; ?>' alt="ProfilePicture"> 
    <section id = ProfileInformations>
        <h2><?php echo $profile['userName'] ?></h2>
        <p class="title"><?php echo $profile['title'] ?></p>
        <!-- <p>Harvard University</p> -->

        <h2 id = "rating"><?php echo $profile['rating'] ?> stars</h2>
        <article class = Description>
            <header>
                <h2>Description</h2>
            </header>
            <p><?php echo $profile['userDescription'] ?></p>
        </article>
    </section>
 
    
    <?php draw_homes($homes);?>
    <button onclick="location.href = 'addHouse.php'" type="button">Add House</button>
    <section>

    
    <?php
    draw_reservations($reservationsMyHouses,false);
    draw_reservations($myReservations,true);
    ?>
    </section>
    
</div>