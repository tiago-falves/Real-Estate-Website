<section class = "loginRegister">
  
  <header>
    <h2>Register</h2>
  </header>
  
  <form method="post" action="../Actions/action_signup.php">
    <input type="email" name="emailaddress" placeholder="E-mail Adress" required>
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="password" name="confirm_password" placeholder="confirm password" required>
    <input type="submit" value="Register">
  </form>
  <footer>
    <p> <a href="login.php"> Already have an account? Login!</a></p>
    <?php  include_once("../templates/messages.php");?>

  </footer>
</section>