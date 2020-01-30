<?php

$max = 0;
$min = 0;
$add = 0;

for ($i=0; $i < $_POST["cantidad"]; $i++) { 

    if ($_POST["n" . $i] > $max){
        $max = $_POST["n" . $i];
    }
    
    if ($_POST["n" . $i] < $min && $_POST["n" . $i] < 5){
        $min = $_POST["n" . $i];
    }  

    $add = $add + $_POST["n" . $i];
}

 
Echo"La mayor cantidad de puntos contaminantes es " . $max;
echo"<br>";
Echo"La menor cantidad de puntos contaminantes es " . $min;
echo"<br>";
Echo"El promedio de puntos contaminantes es" . ($add/$_POST["cantidad"]);
echo"<br>";
echo "jaja salu2";
?> 