<?php

$s = $_POST["s"];
$a = $_POST["a"];

if ($s == 1) {
    $p = (220 - $a) / 10;
    echo"Usted deberia tener " . $p . "pulsaciones cada 10 segundos";
}else {
    $p = (210 - $a) / 10;
    echo"Usted deberia tener " . $p . "pulsaciones cada 10 segundos";
}


?>