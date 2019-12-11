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