<?php

function draw_reservations($reservations){?>
    <header>
        <h2>Reservations</h2>
    </header>
    <table id = "Reservations">
        <tr>
            <th scope="col">Photo</th><th scope="col">username</th><th scope="col">Estado</th><th scope="col">Data Inicial</th><th scope="col">Data Final</th><th scope="col">Casa</th>
        </tr>
        <?php foreach($reservations as $reservation) {
            draw_reservation($reservation);
        } ?> 
    </table>
<?php } 

function draw_reservation($reservation){
    $image  = getProfilePic($reservation['userID']);
    $username = getUsernameFromId($reservation['userID']); 
    $home = getHomeFromId($reservation['home'])?>
    
    <tr>
        <td><a href="profile.php?id=<?php echo $reservation['userID']; ?>"><img src= '../Images/<?php echo $image['path']; ?>' alt="ProfilePicture"> </td></a>
        <td><?php echo $username['userName'] ?></td>
        <td>Aceite</td>
        <td><?php echo $reservation['start_date'] ?></td>
        <td><?php echo $reservation['end_date'] ?></td>
        <td><?php echo $home['title'] ?></td>
    </tr>
<?php }?>