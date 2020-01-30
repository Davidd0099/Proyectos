<?php 
$a = $_POST["n0"];
$b = $_POST["n1"];
$c = $_POST["n2"];


$n3 = ($a + $b + $c)/3;
$n4 = $a + $b + $c;
$n5 = $n4 * 0.1;

echo "el promedio de los numeros es $n3<br>";
echo "la suma de los numeros es $n4<br>";
echo "el 10% de la suma de los numeros es $n5<br>";
if ($a>$b&&$a>$c) {
    echo"$a es el mayor";
} else {
    if($b>$a&&$b>$c){
        echo"$b es el mayor";
    }else{
        echo"$c es el mayor";
    }
}




?> 