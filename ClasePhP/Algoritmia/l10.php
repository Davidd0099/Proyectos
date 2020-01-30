<?php

$h= $_POST["hora"];

$s;
$d;
$m;

$s= $h*(2*60);
$d = $h / 24; 
$m = $h * 60;

echo"$h horas son $s segundos<br>";
echo"$h son $d dias<br>";
echo"$h son $m minutos";


?>