<?php

$k = $_POST["n"];
$d = $_POST["n2"];
$pk = 130.50;
$k2 = $k * 2;

if ($k2 <= 1000 && $d <= 7) {
    echo"Pagas " . ($k2 * $pk);
}else {
    echo"Pagas " . ( ( $k2 * $pk ) * 0.7 );
}






?>