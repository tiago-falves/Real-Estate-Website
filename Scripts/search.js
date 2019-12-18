let searchForm = document.getElementById("SearchText");
let searchType = document.getElementById("searchType");

let titleButton = document.getElementById("title");
let ratingButton = document.getElementById("rating");
let locationButton = document.getElementById("location");
let priceButton = document.getElementById("price");

function setCurrentMode(mode){
    titleButton.setAttribute("selected","false");
    ratingButton.setAttribute("selected","false");
    locationButton.setAttribute("selected","false");
    priceButton.setAttribute("selected","false");

    if(mode == "title"){
        titleButton.setAttribute("selected","true");
        searchType.setAttribute("value", "title");
    }
    
    if(mode == "rating"){
        ratingButton.setAttribute("selected","true");
        searchType.setAttribute("value", "rating");
    }
    
    if(mode == "location"){
        locationButton.setAttribute("selected","true");
        searchType.setAttribute("value", "location");
    }
    
    if(mode == "price"){
        priceButton.setAttribute("selected","true");
        searchType.setAttribute("value", "price");
    }
}

titleButton.onclick = function(event){
    setCurrentMode("title");
}

ratingButton.onclick = function(event){
    setCurrentMode("rating");
}

locationButton.onclick = function(event){
    setCurrentMode("location");
}

priceButton.onclick = function(event){
    setCurrentMode("price");
}
