var vp = document.getElementById('villaplatzi');
var papel = vp.getContext("2d");

prompt("Cual es tu nombre?");

document.addEventListener("keydown", moverLobo);
var lobo = {
  url: "lobo.png",
  cargaOK: false
};
var xLobo = 250;
var yLobo = 250;

var fondo = {
  url: "tile.png",
  cargaOK: false
};

var vaca = {
  url: "vaca.png",
  cargaOK: false
};
var xVaca = new Array();
var yVaca = new Array();

var cerdo = {
  url: "cerdo.png",
  cargaOK: false
};
var xCerdo = new Array();
var yCerdo = new Array();

var pollo = {
  url: "pollo.png",
  cargaOK: false
};
var xPollo = new Array();
var yPollo = new Array();
 

var cantidadVacas = aleatorio(0, 5);
var cantidadPollos = aleatorio(0, 5);
var cantidadCerdos = aleatorio(0, 5);
console.log("Cantidad de Vacas: " + cantidadVacas);
console.log("Cantidad de Pollos: " + cantidadPollos);
console.log("Cantidad de Cerdos: " + cantidadCerdos);

fondo.imagen = new Image();
fondo.imagen.src = fondo.url;
fondo.imagen.addEventListener("load", cargarFondo);

vaca.imagen = new Image();
vaca.imagen.src = vaca.url;
vaca.imagen.addEventListener("load", cargarVacas);

pollo.imagen = new Image();
pollo.imagen.src = pollo.url;
pollo.imagen.addEventListener("load", cargarPollos);

cerdo.imagen = new Image();
cerdo.imagen.src = cerdo.url;
cerdo.imagen.addEventListener("load", cargarCerdos);

lobo.imagen = new Image();
lobo.imagen.src = lobo.url;
lobo.imagen.addEventListener("load", cargarLobo);

function cargarFondo()
{
 fondo.cargaOK = true;
 dibujar();
}
function cargarVacas()
{
 vaca.cargaOK = true;
 dibujar();
}
function cargarPollos()
{
 pollo.cargaOK = true;
 dibujar();
}
function cargarCerdos()
{
 cerdo.cargaOK = true;
 dibujar();
}
function cargarLobo() {
  lobo.cargaOK = true;
  dibujar();
}

function moverLobo(evento) {
  var movimiento = 50;
  var teclas = {
    UP: 38,
    DOWN: 40,
    LEFT: 37,
    RIGHT: 39
  };

  switch (evento.keyCode) {
    case teclas.UP:
      if (yLobo > 0) {
        yLobo = yLobo - movimiento;
        dibujar();
      }
    break;
    case teclas.DOWN:
      if (yLobo < 450) {
        yLobo = yLobo + movimiento;
        dibujar();
      }
    break;
    case teclas.LEFT:
      if (xLobo > 0) {
        xLobo = xLobo - movimiento;
        dibujar();
      }
    break;
    case teclas.RIGHT:
      if(xLobo < 450) {
        xLobo = xLobo + movimiento;
        dibujar();
      }
    break;
    default:
      console.log("Otra tecla : " + evento.key);
    break;
  }
}

function dibujar()
{
  if (fondo.cargaOK)
  {
    papel.drawImage(fondo.imagen, 0, 0);
  }
  if (vaca.cargaOK)
  {
    for (var v = 0; v < cantidadVacas; v++)
    {
      var x = aleatorio(0, 7);
      var y = aleatorio(0, 7);
      var x = x * 60
      var y = y * 60
	  xVaca[v] = x;
      yVaca[v] = y;
      papel.drawImage(vaca.imagen, x, y);
    }
  }
  if (pollo.cargaOK)
  {
    for (var p = 0; p < cantidadPollos; p++)
    {
      var x = aleatorio(0, 7);
      var y = aleatorio(0, 7);
      var x = x * 60
      var y = y * 60
	  xPollo[p] = x;
      yPollo[p] = y;
      papel.drawImage(pollo.imagen, x, y);
    }
  }
  if (cerdo.cargaOK)
  {
    for (var c = 0; c < cantidadCerdos; c++)
    {
      var x = aleatorio(0, 7);
      var y = aleatorio(0, 7);
      var x = x * 60
      var y = y * 60
	  xCerdo[c] = x;
      yCerdo[c] = y;
      papel.drawImage(cerdo.imagen, x, y);
    }
  }
  if (lobo.cargaOK) 
  {
    papel.drawImage(lobo.imagen, xLobo, yLobo);
  }
}



function aleatorio(min, maxi)
{
  var resultado;
  resultado = Math.floor(Math.random() * (maxi - min + 1)) + min;
  return resultado;
}
