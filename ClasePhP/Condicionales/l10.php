<?php

$n1= $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

if ($n1 == $n2 && $n1 == $n3) {
    echo"el triangulo es El triangulo es equilatero jaja salu2";
}else {
    if ($n1 == $n2 || $n2 == $n3 || $n1 == $n3) {
        echo"el triangulo es Isosceles jaja salu2";
    }else {
        echo"el triangulo es escaleno jaja salu2";
    }
}




?>