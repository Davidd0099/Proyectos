<?php

$n = $_POST["n"];
$n1 = $_POST["n1"];

if ($n < 100) {
    echo"El sujeto tiene una comision de " . ( ($n * $n1) * 0.05 ) . " peso";
} else {
    if ($n >= 100 && $n <= 200) {
        echo"El sujeto tiene una comision de " . ( ($n * $n1) * 0.1 ) . " peso";
    } else {
        echo"El sujeto tiene una comision de " . ( ($n * $n1) * 0.15 ) . " peso";
    }
    
}




?>
