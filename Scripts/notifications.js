let notificationsButtonElement = document.getElementById("notificationsButton");
let notificationsElement = document.getElementById("notificationsList");

let setNotificationState = function(state, reservation){
    let request = new XMLHttpRequest();

    request.open("post", "../Requests/setReservationState.php", true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({reservation: reservation, state: state}));

    request.onreadystatechange = function() {
        if (this.readyState == 4) {
            if(this.status != 200){
                console.log("Request wasn't accepted: code " + this.status);
            }
            else{
                updateNotifications(undefined);
                notificationsElement.style.visibility = "hidden";
            }
        }
    };
}

let notificationsRequestReponse = function(response){
    console.log(response);
    if(response.length){
        notificationsElement.innerHTML = "";

        notificationsButtonElement.innerHTML = "Pending Notifications";

        for(let i = 0; i < response.length && i < 5; ++i){
            let reservationElement = document.createElement('div');
            reservationElement.setAttribute("class","notification");
            reservationElement.reservationID = response[i][0];

            let acceptFunction = function(){
                setNotificationState("ACCEPTED",this.reservationID);
            }

            let refuseFunction = function(){
                setNotificationState("REFUSED",this.reservationID);
            }
    
            let acceptElement = document.createElement('button');
            acceptElement.innerHTML = "Accept";
            acceptElement.onclick = acceptFunction.bind(reservationElement);

            let refuseElement = document.createElement('button');
            refuseElement.innerHTML = "Refuse";
            refuseElement.onclick = refuseFunction.bind(reservationElement);

            let notificationNode = document.createTextNode("" + response[i][2] + "," + response[i][3] + "," + response[i][4]);
            
            reservationElement.appendChild(notificationNode);
            reservationElement.appendChild(acceptElement);
            reservationElement.appendChild(refuseElement);

            notificationsElement.appendChild(reservationElement);
        }
    }
    else{
        notificationsButtonElement.innerHTML = "No Notifications";
        notificationsElement.innerHTML = "";
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

setInterval(updateNotifications, 10000);

let notifsClickHandler = function(event){
    if(notificationsElement.style.visibility == "visible")
        notificationsElement.style.visibility = "hidden";
    else
        if(notificationsElement.innerHTML != "")
            notificationsElement.style.visibility = "visible";
}

notificationsButtonElement.onclick = notifsClickHandler;

updateNotifications(undefined);
