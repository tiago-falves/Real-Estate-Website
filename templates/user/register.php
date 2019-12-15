<section class = "loginRegister">
  
  <header>
    <h2>Register</h2>
  </header>
  
  <form id="registerForm" method="post" action="../Actions/action_signup.php">
    <p>Email: <input type="email" name="emailaddress" placeholder="E-mail Adress" required></p>
    <p>User name: <input type="text" name="username" placeholder="username" required></p>
    <p>Password: <input type="password" name="password" placeholder="password" required></p>
    <p>Confirm Password: <input type="password" name="confirm_password" placeholder="confirm_password" required></p>
    <div id="warnings"></div>
    <input type="submit" value="Register">
  </form>
  <script src="../Scripts/registerForm.js"></script>
  <footer>
    <p> <a href="login.php"> Already have an account? Login!</a></p>
    <?php  include_once("../templates/messages.php");?>
  </footer>
</section>