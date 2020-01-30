<?php 


$t = 0;
$q=0;


for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    $q = $_POST["c" . $i] * $_POST["p" . $i];

    echo"Compro " . $_POST["c" . $i] . " del producto " . $_POST["n" . $i] . "a un precio unitario de " . $_POST["p" . $i] . "para un total de " . $q . "$<br>";
    $t = $t + $q;
}



echo"El total de la compra es " . $t;













?>