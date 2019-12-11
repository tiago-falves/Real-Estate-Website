<?php
 include_once('../session/session.php');
 include_once('../database/database.php');
 include_once('../database/queries.php');

  
  //Como assim quando nao estou logged in ele retorna o meu up
  
  
function updateUser($username,$newPassord,$newDescription){
    $db = Database::instance()->db();
    $stmt = $db->prepare(' UPDATE PERSON SET PASSWORD_HASH = ? , USERDESCRIPTION = ? WHERE userName = ?');
    $stmt->execute(array(password_hash($newPassord, PASSWORD_DEFAULT),$newDescription,$username));
}




if (checkUserCredentials($_SESSION['username'], $_POST['password'])) {
    updateUser($username,$_POST['password'],$_POST['description']);
    $_SESSION['success_messages'][] = "Profile changed successfully!";

} else {
    echo("Para de tentar entrar no site oh boi");
    $_SESSION['error_messages'][] = "Wrong information";
}



  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
