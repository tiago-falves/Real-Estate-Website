<?php
 include_once('../session/session.php');
 include_once('../database/database.php');

  
  //Como assim quando nao estou logged in ele retorna o meu up
  
  

  function isLoginCorrect($username, $password) {
      
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM Person WHERE userName = ? AND password_hash = ?');
    $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT))); //sha1($password) Para Dar Hash a password
    return $stmt->fetch() !== false;
}

function insertUser($username, $password) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO Person  VALUES (NULL, ?, 1, ?, "", 1, "", 0)');
    $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));
    
} 
function updateUser($username,$newPassord,$newDescription){
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO Person  VALUES (NULL, ?, 1, ?, "", 1, "", 0)');
    $stmt = $db->prepare(' UPDATE PERSON SET PASSWORD_HASH = ? , USERDESCRIPTION = ? WHERE userName = ?');
    $stmt->execute(array(password_hash($newPassord, PASSWORD_DEFAULT),$newDescription,$username));
    $stmt->execute(array(password_hash($newPassord, PASSWORD_DEFAULT),$newDescription,$username));
}


$username = get_current_user();
echo($username);

if (isLoginCorrect($username, $_POST['password']) /*&& Funcao que o bruno ja fez de confirmar passwords*/) {
    updateUser($username,$_POST['password'],$_POST['description']);
    $_SESSION['success_messages'][] = "Profile changed successfully!";

} else {
    echo("Para de tentar entrar no site oh boi");
    $_SESSION['error_messages'][] = "Wrong information";
}



  header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
