<?php
  include_once('../session/session.php');
  include('../templates/profileHeader.php');  
  include('../database/queries.php');
  include_once("../templates/user/editProfile.php");
  include('../templates/common/Footer.php');
?>

<!-- ONLY CHANGE IN DATABASE IF ALTERED -->
<!-- $("form :input").change(function() {
  $(this).closest('form').data('changed', true);
});
$('#mybutton').click(function() {
  if($(this).closest('form').data('changed')) {
     //do something
  }
}); -->