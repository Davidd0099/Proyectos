var teclas = {
  UP: 38,
  DOWN: 40,
  LEFT: 37,
  RIGHT: 39
};

document.addEventListener("keydown", dibujarTeclado);
var cuadrito = document.getElementById("area_de_dibujo");
var papel = cuadrito.getContext("2d");
var x = 150;
var y = 150;

dibujarLinea("red", x - 1, y - 1, x + 1, y + 1, papel);

function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal, lienzo)
{
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.lineWidth = 1;
  lienzo.moveTo(xinicial, yinicial);
  lienzo.lineTo(xfinal, yfinal);
  lienzo.stroke();
  lienzo.closePath();
}

function dibujarTeclado(evento)
{
  var colorcito = "blue"
  var movimiento = 1
  switch (evento.keyCode)
   {
     case 38:
    dibujarLinea(colorcito, x, y, x, y - movimiento, papel);
    y = y - movimiento
       break;
    case 40:
    dibujarLinea(colorcito, x, y, x, y + movimiento, papel);
    y = y + movimiento
       break;
    case 37:
    dibujarLinea(colorcito, x, y, x - movimiento, y, papel);
    x = x - movimiento
       break;
    case 39:
    dibujarLinea(colorcito, x, y, x + movimiento, y, papel);
    x = x + movimiento
       break;
  }
}
