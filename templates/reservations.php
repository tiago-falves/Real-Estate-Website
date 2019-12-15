<?php

function draw_reservations($reservations,$myReservation){?>
    <header>
        <h2><?php if($myReservation) {echo("My Reservations");} else echo("Reservations From my houses"); ?></h2>
    </header>
    <table id = "Reservations">
        <tr>
            <th scope="col">Photo</th><th scope="col">username</th><th scope="col">Estado</th><th scope="col">Data Inicial</th><th scope="col">Data Final</th><th scope="col">Casa</th>
        </tr>
        <?php foreach($reservations as $reservation) {
            draw_reservation($reservation,$myReservation);
        } ?> 
    </table>
<?php } 

function draw_reservation($reservation,$myReservations){
    if($myReservations == false){
        $person = getUserFromId($reservation['userID']); 
        $image  = getProfilePic($reservation['userID']);
    }
    else {
        $personId = getReservationOwner($reservation['id']);
        $person =getUserFromId($personId['owner']);

        $image  = getProfilePic($personId['owner']);

    }
    $home = getHomeFromId($reservation['home'])?>
    
    <tr>
        <td><a href="profile.php?id=<?php echo $reservation['userID']; ?>"><img src= '../Images/<?php echo $image['path']; ?>' alt="ProfilePicture"> </td></a>
        <td><?php echo $person['userName'] ?></td>
        <td>Aceite</td>
        <td><?php echo $reservation['start_date'] ?></td>
        <td><?php echo $reservation['end_date'] ?></td>
        <td><?php echo $home['title'] ?></td>
    </tr>
<?php }?>