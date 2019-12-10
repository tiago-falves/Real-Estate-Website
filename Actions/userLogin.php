<?php
    include_once("../database/queries.php");
    include_once("sessions.php");

    $username = $_POST('username');
    $password = $_POST('password');

    if(checkUserCredentials($username, $password)){
        $_SESSION['username'] = $username;
        $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Logged in successfully');
        //header('Location: foo');
    } else {
        $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Login failed!');
        //header('Location: foo');
    }
?>