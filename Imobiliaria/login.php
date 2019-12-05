<?php
  include('../templates/common/Header.php');  
?>
<section class = "loginRegister">
  
  <header>
    <h2>Login</h2>
  </header>
  
  <form method="post" action="action_login.php">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="Login">
  </form>
  <footer>
    <p>Don't have an account? <a href="signup.php">Signup!</a></p>
  </footer>
</section>
<?php
  include('../templates/common/Footer.php');  
?>
