
<?php
include_once("../templates/Homes/homeFunctions.php");
function draw_best_offers($homes){ 
    ?>
<div id = "BestOffers">
    <header>
        <h2>Best Offers</h2>
    </header>
    <section id = "Homes">
        <div class = "ScrollableList">
            <div class = "item" id = "BiggerPhoto">
                <?php draw_main_home($homes,0);?>
            </div>
            <div class = "item" class = "SmallerPhotosCollumn">
                <?php draw_main_home($homes,1);
                draw_main_home($homes,2)?>
            </div>
            <div class = "item" class = "SmallerPhotosCollumn">
            <?php draw_main_home($homes,3);
                draw_main_home($homes,4)?>
            </div>
            <div class = "item" class = "SmallerPhotosCollumn">
            <?php draw_main_home($homes,3);
                draw_main_home($homes,4)?>
            </div>
            <div class = "item" class = "SmallerPhotosCollumn">
            <?php draw_main_home($homes,3);
                draw_main_home($homes,4)?>
            </div>
        </div>
    </section>
    <button onclick="location.href = 'discover.php'" type="button">See All</button>         
</div>
<?php } ?>
