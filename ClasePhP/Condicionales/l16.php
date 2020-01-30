<?php

$n1 = $_POST["n0"];
$n2 = $_POST["n1"];
$n3 = $_POST["n2"];



if($n1 == ($n2+$n3)){
    echo"Iguales jaja salu2";
}else {
    if($n2 == ($n1+$n3)){
        echo"Iguales jaja salu2";
    }else {
        if($n3 == ($n2+$n1) ){
            echo"Iguales jaja salu2";
        }else {
            echo"Son distintos jajasalu2";
        }
    }
}


?> 