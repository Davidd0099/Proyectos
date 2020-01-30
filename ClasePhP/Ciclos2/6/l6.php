<?php

$max = 0;
$min = 0;
$add = 0;

for ($i=0; $i < $_POST["cantidad"]; $i++) { 
    if ($_POST["n" . $i] < $min && $_POST["n" . $i] < 5){
        $min = $_POST["n" . $i];
    }  

    $add = $add + $_POST["n" . $i];
}


Echo"La nota mas baja es " . $min;
echo"<br>";
Echo"El promedio de notas es " . ($add/$_POST["cantidad"]);
echo"<br>";
echo "jaja salu2";
?> 