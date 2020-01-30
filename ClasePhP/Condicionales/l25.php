<?php

$n = $_POST["n"];


if ($n < 5) {
    echo"El sujeto paga " . ($n * 800) . " peso";
} else {
    if ($n >= 5) {
        echo"El sujeto paga " . ($n * 700) . " peso";
    } 
    
}




?>
