<?php
  include('../templates/common/Header.php');  
?>
        <section id="AdvancedSearch">
            <header>
                <h2>Advanced Search</h2>
            </header>
            <img src="../Images/ribeira.jpg" alt="Ribeira">
            <nav id="Allcities">
                <header>Todas as cidades</header>
                <!-- just for the hamburguer menu in responsive layout -->
                <input type="checkbox" id="citiesCheckbox"> 
                <label class="hamburger" for="citiesCheckbox"></label>
                <ul>
                    <li><a href="index.html">Porto</a></li>
                    <li><a href="index.html">Lisboa</a></li>
                    <li><a href="index.html">Braga</a></li>
                    <li><a href="index.html">Sinfães</a></li>
                    <li><a href="index.html">Narnia</a></li>
                    <li><a href="index.html">Shire</a></li>
                </ul>
            </nav>
            <nav id="HouseTypeMenu">
                <header>House type</header>
                <!-- just for the hamburguer menu in responsive layout -->
                <input type="checkbox" id="houseType"> 
                <label class="hamburger" for="houseType"></label>
                <ul>
                    <li><a href="index.html">Apartement</a></li>
                    <li><a href="index.html">Mansion</a></li>
                    <li><a href="index.html">Condominium</a></li>
                </ul>
            </nav>
            <input type="search" name="idHouse" value="House ID">
            <input type="search" name="Area" value="Area (m2)">
            <input type="search" name="lowerPrice" value="Price: More than...">
            <input type="search" name="higherPrice" value="Price: Less than...">
            <a href="searchResults.txt"><img src="../Images/search.png" alt="Search Logo"></a>  
        </section>
        <nav id = "OrderSearch">
            <header>Custom Search</header>
            <!-- just for the hamburguer menu in responsive layout -->
            <input type="checkbox" id="hamburger"> 
            <label class="hamburger" for="hamburger"></label>
            <ul>
                <li><a href="index.html">Higher to Lower Price</a></li>
                <li><a href="index.html">Lower to higher price</a></li>
                <li><a href="index.html">Newer First</a></li>
                <li><a href="index.html">Older first</a></li>
            </ul>
        </nav>

        <div id="ListHouses">
            <h2>Best Matches</h2>
            <section class = House>
                <header>
                    <h3>Old Tiles downtown</h3>
                    <h4>Price 199.000 $</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum lorem sed risus ultricies</p>
                <button onclick="myFunction()" id="seeMore2">More Info</button>
                <footer>
                    <span class="author">Restivo</span>
                    <span class="date">15m</span>
                </footer>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
            <section class = House>
                <header>
                    <h3>Old Tiles downtown</h3>
                    <h4>Price 199.000 $</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum lorem sed risus ultricies</p>
                <button onclick="myFunction()" id="seeMore3">More Info</button>
                <footer>
                    <span class="author">Restivo</span>
                    <span class="date">15m</span>
                </footer>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
            <section class = House>
                <header>
                    <h3>Old Tiles downtown</h3>
                    <h4>Price 199.000 $</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum lorem sed risus ultricies</p>
                <button onclick="myFunction()" id="seeMore4">More Info</button>
                <footer>
                    <span class="author">Restivo</span>
                    <span class="date">15m</span>
                </footer>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
            <section class = House>
                <header>
                    <h3>Old Tiles downtown</h3>
                    <h4>Price 199.000 $</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum lorem sed risus ultricies</p>
                <button onclick="myFunction()" id="seeMore5">More Info</button>
                <footer>
                    <span class="author">Restivo</span>
                    <span class="date">15m</span>
                </footer>
                <a href="home.html"><img src="../Images/home.jpg" alt="Casa 1"></a>
            </section>
            <a href="">See All</a>            
        </div>
        <?php
  include('../templates/common/Footer.php');  
?>