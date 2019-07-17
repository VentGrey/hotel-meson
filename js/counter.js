//Variables Generales
var hsPrice = 1200;
var hdPrice = 1500;
var htPrice = 1800;
var hcPrice = 2000;

var hsAva = 11;
var hdAva = 10;
var htAva = 5;
var hcAva = 1;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Son las funciones que agregan una habitación y que resetean el contador

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

//Hab doble
var j = 0;

function clickLinkHD() {
    j++;
    if (j <= 10) {
        document.getElementById("clicks-hd").innerHTML = j;
    } else {
        j = 10;

        document.getElementById("clicks-hd").innerHTML = j;
    }
}

function resetHD() {
    j = 0;
    hdAva = 10;

    document.getElementById("clicks-hd").innerHTML = j;
    document.getElementById("clicks-ava-hd").innerHTML = hdAva;
}

//Hab Triple
var k = 0;

function clickLinkHT() {
    k++;
    if (k <= 5) {
        document.getElementById("clicks-ht").innerHTML = k;
    } else {
        k = 5;

        document.getElementById("clicks-ht").innerHTML = k;
    }
}

function resetHT() {
    k = 0;
    htAva = 5;

    document.getElementById("clicks-ht").innerHTML = k;
    document.getElementById("clicks-ava-ht").innerHTML = htAva;
}

//Hab Cuádruple
var l = 0;

function clickLinkHC() {
    l++;
    if (l <= 1) {
        document.getElementById("clicks-hc").innerHTML = l;
    } else {
        l = 1;

        document.getElementById("clicks-hc").innerHTML = l;
    }
}

function resetHC() {
    l = 0;
    hcAva = 1;

    document.getElementById("clicks-hc").innerHTML = l;
    document.getElementById("clicks-ava-hc").innerHTML = hcAva;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Desactiva los días que ya pasaron para que el cliente no pueda elegirlos

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Price Algorithm

function pagar() {
    //Verifica que el check out no sea menor o igual al check in
    let startDate = document.getElementById("checkIn").value;
    let endDate = document.getElementById("checkOut").value;

    if ((new Date(startDate).getTime() > new Date(endDate).getTime())) {
        alert("La fecha de checkout no puede ser menor a la de checkin");
    } else if ((new Date(startDate).getTime() == new Date(endDate).getTime())) {
        alert("La fecha no puede ser la misma para el día de check in y check out");
    }
    //Convierte el timestamp a días
    let daysRented = (((new Date (endDate).getTime() - new Date (startDate).getTime()) / 1000) / 86400);
    
    //Saca el pago total multiplicando el número de días por la cantidad de 
    //habitaciones y el precio de cada una de ellas
    var m = daysRented * ((i * hsPrice)+(j * hdPrice)+(k * htPrice)+(l * hcPrice));

    if (m = NaN) {
        alert("Por favor elija fechas para su reserva");
        document.getElementById("clicks-price").innerHTML = 0;
    }else if (m == 1) {
        document.getElementById("clicks-price").innerHTML = m;
    } else {
        document.getElementById("clicks-price").innerHTML = m;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Es la función que permite saber cuántas habitaciones disponibles quedan

//Available Hab Sencilla
function pagarHS() {
    n = hsAva - i;

    if (n <= 0) {
        document.getElementById("clicks-ava-hs").innerHTML = 0;
    } else {
        document.getElementById("clicks-ava-hs").innerHTML = n;
    }
}

//Available Hab Doble
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
}