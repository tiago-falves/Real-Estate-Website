<?php
  include('../templates/common/header.php');  
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
<div id="BestOffers">
    <header>
        <h2>Best Offers</h2>
    </header>
    <section id = "Homes">
        <section class = "Home" id= "BiggerPhoto">
            <header>
                <h3>Price</h3>
                <h4>City</h4>
            </header>
            <a href="home.php"><img src="../Images/home.jpg" alt="Casa 1"></a>
        </section>
        <section class = "Home">
            <header>
                <h3>Price</h3>
                <h4>City</h4>
            </header>
        <a href="home.php"><img src="../Images/home.jpg" alt="Casa 2"></a>                </section>
        <section class = "Home">
            <header>
                <h3>Price</h3>
                <h4>City</h4>
            </header>
        <a href="home.php"><img src="../Images/home.jpg" alt="Casa 3"></a>                </section>
        <section class = "Home">
            <header>
                <h3>Price</h3>
                <h4>City</h4>
            </header>
            <a href="home.php"><img src="../Images/home.jpg" alt="Casa 4"></a>                </section>
        <section class = "Home">
            <header>
                <h3>Price</h3>
                <h4>City</h4>
            </header>
            <a href="home.php"><img src="../Images/home.jpg" alt="Casa 5"></a>                
        </section>   
    </section>
    <button type="button">See All</button>         
</div>
<?php
  include('../templates/common/header.php');  
?>