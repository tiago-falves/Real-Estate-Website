<?php include_once('../session/session.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
    <script src="../Scripts/includes.js"></script>
    <head>
        <title>Invicta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Css/styles.css" rel="stylesheet">
        <link href="../Css/layout.css" rel="stylesheet">
        <link href="../Css/forms.css" rel="stylesheet">
        <link href="../Css/home.css" rel="stylesheet">
        <link href="../Css/comments.css" rel="stylesheet">
        <link href="../Css/discover.css" rel="stylesheet">
        <link href="../Css/responsive.css" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1> <a href="main_page.php">Invicta</a></h1>
            <nav id="menu">
            <div class="wrapper-dropdown">
                <span>Actions</span>
                <ul class="dropdown">
                    <!-- <li><a href="rent.php">Rent</a></li> -->
                    <li><a href="discover.php">Discover</a></li>  
                    <?php
                        if(isset($_SESSION['username'])){     
                            echo ('<li><a href="profile.php">Profile</a></li>');
                            echo ('<li><a href="editProfile.php">Edit Profile</a></li>');
                        }
                    ?>
                </ul>
            </div>
            </nav>     
                <div id="signup">
                <?php
                    if(isset($_SESSION['username'])){ ?>
                        <a id="notificationsButton">No notifications</a>
                        <ul id="notificationsList" hidden>
                            <!-- <li><a href="rent.php">Rent</a></li> -->
                            <li><a href="discover.php">Discover</a></li>  
                        </ul>
                        <script src="../Scripts/notifications.js"> </script>
                        <a href="../Actions/action_logout.php">Log out</a>
                    <?php
                    }
                    else{
                        echo ('<a href="register.php">Sign Up</a>');
                        echo ('<a href="login.php">Login</a>');
                    }
                ?>
            </div>
        </header>