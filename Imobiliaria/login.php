<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Invicta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Css/forms.css" rel="stylesheet">
        <link href="../Css/style.css" rel="stylesheet">
        <link href="../Css/layout.css" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1> <a href="main_page.php">Invicta</a></h1>
            <div id="signup">
                <a href="register.php">Sign Up</a>
                <a href="login.php">Login</a>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="buy.php">Buy</a></li>
                    <li><a href="rent.php">Rent</a></li>
                    <li><a href="discover.php">Rent</a></li>
                </ul>
            </nav>       
        </header>
    <section id="login">
      
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
    <footer>
      <p>&copy; Invicta, 2019</p>
    </footer>
  </body>
</html>
