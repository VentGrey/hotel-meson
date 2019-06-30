//Carrusel Hab Sencilla
var numhs = 1;

function adelantehs() {
  numhs++;
  if (numhs > 6)
    numhs = 1;
  var imagenhs = document.getElementById("imagenhs");
  imagenhs.src="images/imagen-hs-"+numhs+".jpeg";
}

function atrashs() {
  numhs--;
  if (numhs < 1)
    numhs = 6;
  var imagenhs = document.getElementById("imagenhs");
  imagenhs.src="images/imagen-hs-"+numhs+".jpeg";
}

//Carrusel Hab Doble
var numhd = 1;

function adelantehd() {
  numhd++;
  if (numhd > 5)
    numhd = 1;
  var imagenhd = document.getElementById("imagenhd");
  imagenhd.src="images/imagen-hd-"+numhd+".jpeg";
}

function atrashd() {
  numhd--;
  if (numhd < 1)
    numhd = 5;
  var imagenhd = document.getElementById("imagenhd");
  imagenhd.src="images/imagen-hd-"+numhd+".jpeg";
}

//Carrusel Hab Triple
var numht = 1;

function adelanteht() {
  numht++;
  if (numht > 5)
    numht = 1;
  var imagenht = document.getElementById("imagenht");
  imagenht.src="images/imagen-ht-"+numht+".jpeg";
}

function atrasht() {
  numht--;
  if (numht < 1)
    numht = 5;
  var imagenht = document.getElementById("imagenht");
  imagenht.src="images/imagen-ht-"+numht+".jpeg";
}

//Carrusel Hab cuádruple
var numhc = 1;

function adelantehc() {
  numhc++;
  if (numhc > 5)
    numhc = 1;
  var imagenhc = document.getElementById("imagenhc");
  imagenhc.src="images/imagen-hc-"+numhc+".jpeg";
}

function atrashc() {
  numhc--;
  if (numhc < 1)
    numhc = 5;
  var imagenhc = document.getElementById("imagenhc");
  imagenhc.src="images/imagen-hc-"+numhc+".jpeg";
}