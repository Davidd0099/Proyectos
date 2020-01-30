<?php

$n = $_POST["n"];

$n1 = rand(0 , 200);


if ($n1 < 74) {
    echo'Su numero totalmente "aleatorio" es ' . $n1 . "<br>";
    echo"Se le descuenta " . ($n * 0.15);
}else {
    if ($n1 >= 74) {
        echo'Su numero totalmente "aleatorio" es ' . $n1 . "<br>";
        echo"Se le descuenta " . ($n * 0.20);
    }
}




?>
