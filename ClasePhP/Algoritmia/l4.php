<link rel="stylesheet" href="style.css">
 
<?php

$b=$_POST['b'];
$h=$_POST['h'];
$a;
$p;


$a=$b*$h;

$p=(2*$b)+(2*$h);


echo"la base del rectangulo es $b y la altura es $h<br>";
echo"El area del rectangulo es $a <br>";
echo"El perimetro del rectangulo es $p";

?>