<div id="Search">
    <!-- <img src="../Images/porto.jpg" alt="Ribeira"> -->
   
    <video id="vidHTML5" src="https://media.egorealestate-cdn.com/ORIGINAL/f84e/de80e115-57d9-46d8-b4e7-fa58e0fef84e.mp4" autoplay="" loop="" muted="" preload="auto" poster="https://media.egorealestate-cdn.com/ORIGINAL/d4b7/aae094cb-8149-461d-bc9c-dbe3a072d4b7.jpg"></video> 
    
    <form method="post" action="../Imobiliaria/searchResults.php" id="SearchText">
        <ul id="Filters">
            <li id="title" selected="true">Title</li>
            <li id="rating" selected="false">Rating</li>
            <li id="location" selected="false">Location</li>
            <li id="price" selected="false">Price</li>
        </ul>
        
        <section id = "SearchBar">
            <input id="searchType" type="hidden" name="searchType" value="title" />
            <input type="search" name="searchHouses" value="Search term">
            <input type="image" name="submit" src="../Images/search.png" alt="Search Logo" />
        </section>
    </form>
    <script src="../Scripts/search.js"></script>
 
</div>