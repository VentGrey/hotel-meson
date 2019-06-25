var hsPrice = 1200;
var hdPrice = 1500;
var hdlPrice = 1800;
var hfPrice = 2000;

//Hab Sencilla
var i = 0;

function clickLinkHS() {
    i++;
    if (i == 1) {
        document.getElementById("clicks-hs").innerHTML = i;
    } else {
        document.getElementById("clicks-hs").innerHTML = i;
    }
}

function quitarHS() {
    if (i <= 0) {
        i = 0;
    } else {
        i--;
        document.getElementById("clicks-hs").innerHTML = i;
    }
}

//Hab doble
var j = 0;

function clickLinkHD() {
    j++;
    if (j == 1) {
        document.getElementById("clicks-hd").innerHTML = j;
    } else {
        document.getElementById("clicks-hd").innerHTML = j;
    }
}

function quitarHD() {
    if (j <= 0) {
        j = 0;
    } else {
        j--;
        document.getElementById("clicks-hd").innerHTML = j;
    }
}

//Hab de lujo
var k = 0;

function clickLinkHDL() {
    k++;
    if (k == 1) {
        document.getElementById("clicks-hdl").innerHTML = k;
    } else {
        document.getElementById("clicks-hdl").innerHTML = k;
      }
}

function quitarHDL() {
      if (k <= 0) {
          k = 0;
      } else {
          k--;
          document.getElementById("clicks-hdl").innerHTML = k;
      }
}

//Hab Familiar
var l = 0;

function clickLinkHF() {
    l++;
    if (l == 1) {
        document.getElementById("clicks-hf").innerHTML = l;
    } else {
        document.getElementById("clicks-hf").innerHTML = l;
    }
}

function quitarHF() {
    if (l <= 0) {
        l = 0;
    } else {
        l--;
        document.getElementById("clicks-hf").innerHTML = l;
    }
}

//Price Algorithm

function pagar() {
    var m = ( (i * hsPrice) + (j * hdPrice) + (k * hdlPrice) +(l * hfPrice));

    if (m == 1) {
        document.getElementById("clicks-price").innerHTML = m;
    } else {
        document.getElementById("clicks-price").innerHTML = m;
    }
}