<section class = "loginRegister">
  
  <header>
    <h2>Login</h2>
  </header>
    
  <form method="post" action="../Actions/action_login.php">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="Login">
  </form>
  <footer>
    <p>Don't have an account? <a href="signup.php">Signup!</a></p>
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