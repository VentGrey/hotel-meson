var hsPrice = 1200;
var hdPrice = 1500;
var hdlPrice = 1800;
var hfPrice = 2000;

var hsAva = 11;
var hdAva = 10;
var htAva = 5;
var hcAva = 1;

//Hab Sencilla
var i = 0;

function clickLinkHS() {
    i++;
    if (i <= 11) {
        document.getElementById("clicks-hs").innerHTML = i;
    } else {
        i = 11;

        document.getElementById("clicks-hs").innerHTML = i;
    }
}

function resetHS() {
    i = 0;
    hsAva = 11;

    document.getElementById("clicks-hs").innerHTML = i;
    document.getElementById("clicks-ava-hs").innerHTML = hsAva;
}

/*Hab doble
var j = 0;

function clickLinkHD() {
    j++;
    if (j <= 6) {
        document.getElementById("clicks-hd").innerHTML = j;
    } else {
        j = 6;

        document.getElementById("clicks-hd").innerHTML = j;
    }
}

function resetHD() {
    j = 0;
    hdAva = 6;

    document.getElementById("clicks-hd").innerHTML = j;
    document.getElementById("clicks-ava-hd").innerHTML = hdAva;
}

//Hab de lujo
var k = 0;

function clickLinkHDL() {
    k++;
    if (k <= 6) {
        document.getElementById("clicks-hdl").innerHTML = k;
    } else {
        k = 6;

        document.getElementById("clicks-hdl").innerHTML = k;
    }
}

function resetHDL() {
    k = 0;
    hdlAva = 6;

    document.getElementById("clicks-hdl").innerHTML = k;
    document.getElementById("clicks-ava-hdl").innerHTML = hdlAva;
}

//Hab Familiar
var l = 0;

function clickLinkHF() {
    l++;
    if (l <= 6) {
        document.getElementById("clicks-hf").innerHTML = l;
    } else {
        l = 6;

        document.getElementById("clicks-hf").innerHTML = l;
    }
}

function resetHF() {
    l = 0;
    hfAva = 6;

    document.getElementById("clicks-hf").innerHTML = l;
    document.getElementById("clicks-ava-hf").innerHTML = hfAva;
}*/

//To disable the past days (check in)
var fecha = new Date();
var año  = fecha.getFullYear();
var dia = fecha.getDate();
var _mes = fecha.getMonth();
_mes = _mes + 1;
      
if(_mes < 10) {
    var mes = "0" + _mes;
}
else {
    var mes = _mes.toString;
}
document.getElementById("checkIn").min = año+'-'+mes+'-'+dia;

//To disable past days (check out)
var fecha1 = new Date();
var año1  = fecha1.getFullYear();
var dia1 = fecha1.getDate();
var _mes1 = fecha1.getMonth();
_mes1 = _mes1 + 1;
      
if(_mes1 < 10) {
    var mes1 = "0" + _mes1;
}
else {
    var mes1 = _mes1.toString;
}
document.getElementById("checkOut").min = año1+'-'+mes1+'-'+dia1;

/*Days of stay
function compare() {
    let startDate = document.getElementById("checkIn").value;
    let endDate = document.getElementById("checkOut").value;

    if ((new Date(startDate).getTime() > new Date(endDate).getTime())) {
        // Si la fecha de inicio es mayor que la fecha de terminación enviar
        // un error.

        alert("La fecha de checkout no puede ser menor a la de checkin");
    } else if ((new Date(startDate).getTime() == new Date(endDate).getTime())) {
        alert("La fecha no puede ser la misma para el día de check in y check out");
    }

    let daysRented = endDate - startDate;
    return daysRented;
}*/

//Price Algorithm

function pagar() {
    let startDate = document.getElementById("checkIn").value;
    let endDate = document.getElementById("checkOut").value;

    if ((new Date(startDate).getTime() > new Date(endDate).getTime())) {
        // Si la fecha de inicio es mayor que la fecha de terminación enviar
        // un error.

        alert("La fecha de checkout no puede ser menor a la de checkin");
    } else if ((new Date(startDate).getTime() == new Date(endDate).getTime())) {
        alert("La fecha no puede ser la misma para el día de check in y check out");
    }

    let daysRented = endDate - startDate;
    alert(daysRented);
    
    var m = daysRented * (i * hsPrice);

    if (m == 1) {
        document.getElementById("clicks-price").innerHTML = m;
    } else {
        document.getElementById("clicks-price").innerHTML = m;
    }
}

//Available Hab Sencilla
function pagarHS() {
    n = hsAva - i;

    if (n <= 0) {
        document.getElementById("clicks-ava-hs").innerHTML = 0;
    } else {
        document.getElementById("clicks-ava-hs").innerHTML = n;
    }
}

/*Available Hab Doble
function pagarHD() {
    o = hdAva - j;

    if (o <= 0) {
        document.getElementById("clicks-ava-hd").innerHTML = 0;
    } else {
        document.getElementById("clicks-ava-hd").innerHTML = o;
    }
}

//Available Hab de lujo
function pagarHDL() {
    p = hdlAva - k;

    if (p <= 0) {
        document.getElementById("clicks-ava-hdl").innerHTML = 0;
    } else {
        document.getElementById("clicks-ava-hdl").innerHTML = p;
    }
}

//Available Hab Familiar
function pagarHF() {
    q = hfAva - l;

    if (q <= 0) {
        document.getElementById("clicks-ava-hf").innerHTML = 0;
    } else {
        document.getElementById("clicks-ava-hf").innerHTML = q;
    }
}*/