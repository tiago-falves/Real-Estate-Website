<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Invicta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Css/style.css" rel="stylesheet">
        <link href="../Css/layout.css" rel="stylesheet">
        <link href="../Css/forms.css" rel="stylesheet">
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
        <div id="Search">
            <section id="SearchText">
                <ul id="Filters">
                    <li><a href="">For Sale</a></li>
                    <li><a href="">Rent</a></li>
                    <li><a href="">Zaaaaaas</a></li>
                </ul>
                <input type="search" name="searchHouses" value="Search...">
                <section id = "SearchButton">
                    <!-- <a href="searchResults.txt"><img src="../Images/search.png" alt="Search Logo"></a>   -->
                </section>
            </section>
            <img src="../Images/ribeira.jpg" alt="Ribeira">
            
        </div>
        <div id="BestOffers">
            <header>
                <h2>Best Offers</h2>
            </header>
            <section id = "Homes">
                <section class = "Home">
                    <header>
                        <h3>Price</h3>
                        <h4>City</h4>
                    </header>
                    <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
                </section>
                <section class = "Home">
                    <header>
                        <h3>Price</h3>
                        <h4>City</h4>
                    </header>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 2"></a>                </section>
                <section class = "Home">
                    <header>
                        <h3>Price</h3>
                        <h4>City</h4>
                    </header>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 3"></a>                </section>
                <section class = "Home">
                    <header>
                        <h3>Price</h3>
                        <h4>City</h4>
                    </header>
                    <a href="home.html"><img src="../Images/home.jpg" alt="Casa 4"></a>                </section>
                <section class = "Home">
                    <header>
                        <h3>Price</h3>
                        <h4>City</h4>
                    </header>
                    <a href="home.html"><img src="../Images/home.jpg" alt="Casa 5"></a>                
                </section>   
            </section>
            <button type="button">See All</button>         
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