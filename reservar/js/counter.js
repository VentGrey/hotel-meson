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

//Price Algorithm

function pagar() {
    var m = i * hsPrice;

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

function compare() {
    let start_date = document.getElementById("checkIn").value;
    let end_date = document.getElementById("checkOut").value;

    if ((new Date(start_date).getTime() < new Date(end_date).getTime())) {
        // Código de comparación aquí adentro
    }
}
