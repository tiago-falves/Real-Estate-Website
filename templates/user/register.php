<section class = "loginRegister">
  
  <header>
    <h2>Register</h2>
  </header>
  
  <form id="registerForm" method="post" action="../Actions/action_signup.php">
    <p>Email: <input type="email" name="emailaddress" placeholder="E-mail Adress" required></p>
    <p>User name: <input type="text" name="username" placeholder="username" required></p>
    <p>Password: <input type="password" name="password"></p>
    <p>Confirm Password: <input type="password" name="confirm_password"></p>
    <input type="submit" value="Register">
  </form>
  <script src="../Scripts/registerForm.js"></script>
  <footer>
    <p> <a href="register.php"> Already have an account? Login!</a></p>
    <section id="messages">
      <?php $errors = getErrorMessages();foreach ($errors as $error) { ?>
      <article class="error">
        <p><?=$error?></p>
      </article>
      <?php } ?>
      <?php $successes = getSuccessMessages();foreach ($successes as $success) { ?>
      <article class="success">
        <p><?=$success?></p>
      </article>
      <?php } clearMessages(); ?>
  </section>
  </footer>
</section>