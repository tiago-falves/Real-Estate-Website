//TODO: toggle icon element
let notificationsElement = document.getElementById("notifications");

let notificationsRequestReponse = function(response){
    console.log(response);
    if(response.length){
        for(let i = 0; i <= response.length && i <= 5; ++i){
            let reservationElement = document.createElement('a');
            reservationElement.setAttribute("href","nonMatchingPasswords");//TODO: href for the reservation
    
            let reservationNode = document.createTextNode("The passwords must match");
            reservationElement.appendChild(reservationNode);

            notificationsElement.appendChild(reservationElement);
        }
    }
}

let updateNotifications = function(event){
    let request = new XMLHttpRequest();

    request.open("post", "../Requests/checkForNotifications.php", true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.response);
            notificationsRequestReponse(response);
        }
    };
}

//TODO: click handler -> toggle dialogue
//TODO: click handler -> check notification

let clickHandler = function(event){

}

let passwordHandler = function(event){
    let password = passwordField.value;
    let confirm_password = confirmPasswordField.value;

    if(password != confirm_password){
        if((password != "" || confirm_password != "") && !nonMatchingPasswords){
            let nonMatchingPassElement = document.createElement('p');
            nonMatchingPassElement.setAttribute("id","nonMatchingPasswords");
    
            let passwordnode = document.createTextNode("The passwords must match");
            nonMatchingPassElement.appendChild(passwordnode);

            warningElement.appendChild(nonMatchingPassElement);

            nonMatchingPasswords = true;
        }
    }
    else{
        if(nonMatchingPasswords){
            let children = warningElement.children; 
            for(let i = 0; i < children.length; ++i){
                if(children[i].id == "nonMatchingPasswords"){
                    warningElement.removeChild(children[i]);
                    break;
                }
            }
        }
        nonMatchingPasswords = false;
    }
}

passwordField.oninput = passwordHandler;
confirmPasswordField.oninput = passwordHandler;

registerForm.onsubmit = function(event){
    if(nonMatchingPasswords || repeatedUser){
        event.preventDefault();
    }
}
