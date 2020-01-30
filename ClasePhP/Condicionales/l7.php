<?php

$n1= $_POST["n1"];
$n2 = $_POST["n2"];


if (($n1 != 0 && $n2 != 0) && (($n1 < 0 && $n2 > 0) || (($n1 > 0 && $n2 < 0))) {
    echo $n1 . " " . $n2;
}else{
    echo"eran igual a 0 o de igual signo jaja salud2";
}

?>