var num = 1;

function adelante() {
  num++;
  if (num > 6)
    num = 1;
  var imagen = document.getElementById("imagen");
  imagen.src="images/imagen-hs-"+num+".jpeg";
}

function atras() {
  num--;
  if (num < 1)
    num = 6;
  var imagen = document.getElementById("imagen");
  imagen.src="images/imagen-hs-"+num+".jpeg";
}