<?php 
$n1 = $_POST["n0"];
$n2 = $_POST["n1"];
$n3 = $_POST["n2"];
$n4 = ($n1 + $n2 + $n3) / 3 

$name  = $_POST["name"];
$id = $_POST["id"];

if ( $n4 > 3.5 ) {
    echo"el estudiante " . $name . " con el codigo " . $id . " aprueba la materia con " . $n4;
}else {
    echo"el estudiante " . $name . " con el codigo " . $id . " reprueba la materia con " . $n4;
}




?>