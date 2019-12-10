<?php
  include('../templates/common/Header.php');  
?>

<div id="Search">
    <!-- <img src="../Images/porto.jpg" alt="Ribeira"> -->
   
    <video id="vidHTML5" src="https://media.egorealestate-cdn.com/ORIGINAL/f84e/de80e115-57d9-46d8-b4e7-fa58e0fef84e.mp4" autoplay="" loop="" muted="" preload="auto" poster="https://media.egorealestate-cdn.com/ORIGINAL/d4b7/aae094cb-8149-461d-bc9c-dbe3a072d4b7.jpg"></video> 
    
    <section id="SearchText">
        <ul id="Filters">
            <li><a href="">For Sale</a></li>
            <li><a href="">Rent</a></li>
            <li><a href="">Zaaaaaas</a></li>
        </ul>
        <section id = "SearchBar">
            <input type="search" name="searchHouses" value="Search...">
            <a href="searchResults.txt"><img src="../Images/search.png" alt="Search Logo"></a>  
            
        </section>
    </section>
 
</div>
<div id = "BestOffers">
    <header>
        <h2>Best Offers</h2>
    </header>
    <section id = "Homes">
        <div id = "BiggerPhoto">
            <section class = "Home">
                <header>
                    <h3>Price</h3>
                    <h4>City</h4>
                </header>
                <a href="home.php"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
        </div>
        <div class = "SmallerPhotosCollumn">
            <section class = "Home">
                <header>
                    <h3>Price</h3>
                    <h4>City</h4>
                </header>
                <a href="home.php"><img src="../Images/home.jpg" alt="Casa 2"></a>
            </section>
            <section class = "Home">
                <header>
                    <h3>Price</h3>
                    <h4>City</h4>
                </header>
                <a href=""><img src="../Images/home.jpg" alt="Casa 3"></a>                
            </section>
        </div>
        <div class = "SmallerPhotosCollumn">
            <section class = "Home">
                <header>
                    <h3>Price</h3>
                    <h4>City</h4>
                </header>
                <a href="home.php"><img src="../Images/home.jpg" alt="Casa 3"></a>
            </section>
            <section class = "Home">
                <header>
                    <h3>Price</h3>
                    <h4>City</h4>
                </header>
                <a href="home.php"><img src="../Images/home.jpg" alt="Casa 4"></a>                
            </section>
        </div>
    </section>
    <button type="button">See All</button>         
</div>



<?php
  include('../templates/common/Footer.php');  
?>