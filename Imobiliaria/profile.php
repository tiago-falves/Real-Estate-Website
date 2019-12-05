<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Invicta</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../Css/profile.css" rel="stylesheet" type="text/css">
      <link href="../Css/comments.css" rel="stylesheet" type="text/css">
      <link href="../Css/styles.css" rel="stylesheet" type="text/css">
      <link href="../Css/layout.css" rel="stylesheet" type="text/css">

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

    <div id = "profile">
      <header>
            <h2>Andre Restivo</h2>
            <p class="title">CEO & Founder of Facebook, Example</p>
            <p>Harvard University</p>
      </header>
      <img src="../Images/restivo.jpg" alt="Ribeira">
      <!-- <section id = "rating">
        <h2>Rating Estrelinhas</h2>
      </section> -->
      <article class = Description>
        <header>
          <h2>Description</h2>
        </header>
        <p>Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin blandit ex sit amet suscipit commodo. Duis molestie ligula eu urna tincidunt tincidunt. Mauris posuere aliquet pellentesque. Fusce molestie libero arcu, ut porta massa iaculis sit amet. Fusce varius nisl vitae fermentum fringilla. Pellentesque a cursus lectus.</p>
        <p>Duis condimentum metus et ex tincidunt, faucibus aliquet ligula porttitor. In vitae posuere massa. Donec fermentum magna sit amet suscipit pulvinar. Cras in elit sapien. Vivamus nunc sem, finibus ac suscipit ullamcorper, hendrerit vitae urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque eget tincidunt orci. Mauris congue ipsum non purus tristique, at venenatis elit pellentesque. Etiam congue euismod molestie. Mauris ex orci, lobortis a faucibus sed, sagittis eget neque.</p>
        <p>Mauris tincidunt orci congue turpis viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque rhoncus lorem eget.</p>
      </article>
       
        <section id="comments">
            
            <h2>5 Comments</h2>
            <article class="comment">
                <header>
                    <h3>Fantastic</h3>
                </header>
                 <span class="user">
                     updatespeak
                </span>
                <span class="date">1m</span>
                <p>Aliquam maximus commodo dui, ut viverra urna vulputate et. Donec posuere vitae sem sed vehicula. Sed in erat eu diam fringilla sodales. Aenean lacinia vulputate nisl, dignissim dignissim nisl. Nam at nibh mollis, facilisis nibh sit amet, mattis urna. Maecenas.</p>
            </article>
            <article class="comment">
            <header><h3>Worst Experience of my life</h3></header>
            <span class="user">distortedscorpius</span>
            <span class="date">3m</span>
            <p>Duis scelerisque purus fermentum turpis euismod congue. Phasellus sit amet sem mollis, imperdiet quam porta, volutpat purus. In et sodales urna, sed cursus lectus. Vivamus a massa vitae nisl lobortis laoreet nec tristique magna. Mauris egestas ipsum eu sem lacinia.</p>
            </article>
            <article class="comment">
            <header><h3>The Dining room had a corpse</h3></header>
            <span class="user">duplicateengineer</span>
            <span class="date">7m</span>
            <p>Phasellus at neque nec nunc scelerisque eleifend eu eu risus. Praesent in nibh viverra, posuere ligula condimentum, accumsan tellus. Vivamus varius sem a mauris finibus, ac iaculis risus scelerisque. Nullam fermentum leo dui, at fermentum tellus consequat id. Pellentesque eleifend.</p>
            </article>
   
            <form>
            <h2>Add your voice...</h2>
            <label>Username 
                <input type="text" name="username">
            </label>
            <label>E-mail
                <input type="email" name="email">
            </label>
            <label>Comment
                <textarea name="comment"></textarea>            
            </label>
            <input type="submit" value="Reply">
            </form>
        </section>
        <div id="RecentVisits">
            <header>
                <h2>Houses of this user</h2>
            </header>
            <section id = "Homes">
                 <div class = "SmallerPhotosCollumn">
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 2"></a>
                    </section>
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 3"></a>                
                    </section>
                </div>
                <div class = "SmallerPhotosCollumn">
         
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 3"></a>
                    </section>
                    <section class = "Home">
                        <header>
                            <h3>Price</h3>
                            <h4>City</h4>
                        </header>
                        <a href="home.html"><img src="../Images/home.jpg" alt="Casa 4"></a>                
                    </section>
                </div>
            </section>
            
            <a href="">See All</a>            
        </div>
    </div>
        <footer>
            <h3>Invicta</h3>
            <nav id="FooterLinks">
                <a href="">About us</a>
                <a href="">Help Center</a>
                <a href="">Contact us</a>
            </nav>
        </footer>
    </body>
</html>