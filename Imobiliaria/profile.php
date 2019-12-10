<?php
  include('../templates/profileHeader.php');  
  include('../database/queries.php');

 $idUser = 1; //TEMPORARIO

  $profile = getUserFromId($idUser);
  $profilePicture = getPhotoFromUser($idUser);
 
?>
    <div id = "profile">
      <header>
            <h2><?php echo $profile['userName'] ?></h2>
            <p class="title"><?php echo $profile['title'] ?></p>
            <!-- <p>Harvard University</p> -->
      </header>
      <img src= '../Images/restivo.jpg' alt="Ribeira"> <?php //echo $profilePicture; ?>
      <section id = "rating">
        <h2><?php echo $profile['rating'] ?> stars</h2>
      </section>
      <article class = Description>
        <header>
          <h2>Description</h2>
        </header>
        <p><?php echo $profile['userDescription'] ?></p>

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