var data;

console.log("####");
var dataString;
var xmlHttp = new XMLHttpRequest();
var contactForm= document.querySelector("#contactForm");
contactForm.addEventListener('submit', contactSend);
//Funkcija prevenira formu da posalje podatke odmah

function contactSend(event){
    event.preventDefault();
    contactForm = document.querySelector("#contactForm");
    if(xmlHttp==null){
        alert("Browser ne podrzava XMLHttpRequest");
        return;
    }

    //Pamtimo podatke iz forme uz pomoc atributa value


    data = {
        firstName: contactForm.querySelectorAll("input")[0].value,
        lastName: contactForm.querySelectorAll("input")[1].value,
        birthYear: contactForm.querySelectorAll("input")[2].value,
        city: contactForm.querySelectorAll("input")[3].value,
        address: contactForm.querySelectorAll("input")[4].value,
        newsletter: contactForm.querySelectorAll("input")[5].value,
        sex: contactForm.querySelector("select").value
    }
    //Proveravamo podatke koji se salju i dajemo odgovor ukoliko dodje do greske pri unosu
    //i prekidamo unos

    dataString =         dataString = "firstName=" + data.firstName + "&lastName=" +data.lastName +"&birthYear=" + data.birthYear +
        "&city=" + data.city +"&address" + data.address + "&sex=" + data.sex + "&newsletter=" + data.newsletter;
    console.log(dataString);

    //Pravimo url sa varijablama i backend skriptom koju pozivamo
    if(checkData(data)){
        dataString = "firstName=" + data.firstName + "&lastName=" +data.lastName +"&birthYear=" + data.birthYear +
            "&city=" + data.city +"&address" + data.address + "&sex=" + data.sex + "&newsletter=" + data.newsletter;
        xmlHttp.open('POST', 'index.php?' + dataString);

        xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlHttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xmlHttp.send();
    }





    //Otvaramo post zahtev i contact.php kod vrsi prenos parametra koji se nalaze u str
    //u bazu podataka
}


xmlHttp.onreadystatechange = function(){
        if(xmlHttp.status ===200){
//Funckija za odgovor
            contactForm.innerHTML = "<h3>Success</h3>" + "<p>" + dataString + "</p>";

        }
        else{
            contactForm.innerHTML = "Post request has failed"
        }

}

function checkData(data){
    var bool = (checkYears(data.birthYear))&&
                (checkText(data.firstName))&&
                (checkText(data.lastName))&&
                (checkText(data.city));
    if(bool){
        return true;
    }
    else{
        return false;
    }
}

function checkYears(year){
    var nameRegex = /[0-9]*/;
    if(year.match(nameRegex)&&(year>1900)&&(year<2020)){
        return true;
    }
    return false;

}

function checkText(text) {
    var nameRegex = /^[a-zA-Z ]{2,50}$/;
    if (text.match(nameRegex)) {
        return true;
    }
    return false;

}