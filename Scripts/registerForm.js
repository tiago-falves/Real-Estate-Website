let registerForm = document.getElementById("registerForm");
let warningElement = document.getElementById("warnings");

let usernameField = document.getElementsByName("username")[0];
let passwordField = document.getElementsByName("password")[0];
let confirmPasswordField = document.getElementsByName("confirm_password")[0];

let repeatedUser = false;
let nonMatchingPasswords = false;

let usernameRequestReponse = function(response){
    if(response && !repeatedUser){
        let usernameElement = document.createElement('p');
        usernameElement.setAttribute("id","repeatedUser");

        let usernamenode = document.createTextNode("That user name is already taken");
        usernameElement.appendChild(usernamenode);
        
        warningElement.appendChild(usernameElement);

        repeatedUser = true;
    }
    else{
        if(repeatedUser){
            let children = warningElement.children; 
            for(let i = 0; i < children.length; ++i){
                if(children[i].id == "repeatedUser"){
                    warningElement.removeChild(children[i]);
                    break;
                }
            }
            repeatedUser = false;
        }
    }
}

usernameField.oninput = function(event){
    let username = usernameField.value;

    let request = new XMLHttpRequest();

    request.open("post", "../Requests/checkForUser.php", true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({username: username}));

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.response);
            usernameRequestReponse(response["result"]);
        }
    };
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
