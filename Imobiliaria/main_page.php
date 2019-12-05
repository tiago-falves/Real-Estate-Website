<?php
  include('../templates/common/Header.php');  
?>
<div id="Search">
    <section id="SearchText">
        <ul id="Filters">
            <li><a href="">For Sale</a></li>
            <li><a href="">Rent</a></li>
            <li><a href="">Zaaaaaas</a></li>
        </ul>
        <input type="search" name="searchHouses" value="Search...">
        <section id = "SearchButton">
            <a href="searchResults.txt"><img src="../Images/search.png" alt="Search Logo"></a>  
        </section>
    </section>
    <img src="../Images/ribeira.jpg" alt="Ribeira">
    
</div>

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
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
        </div>
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

    <button type="button">See All</button>         


<?php
  include('../templates/common/Footer.php');  
?>