<?php
  include_once('../session/session.php');

  if(isset($_SESSION['username'])){
    die(header('Location: main_page.php'));
  }

  include_once('../templates/common/Header.php');  
  include_once('../templates/user/register.php');
  include_once('../templates/common/Footer.php');  
?>
