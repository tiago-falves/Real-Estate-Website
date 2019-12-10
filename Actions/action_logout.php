<?php
    include_once("sessions.php");

    session_destroy();
    session_start();
    
    $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Logged out');

    //header('Location: foo');
?>