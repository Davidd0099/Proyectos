<?php
$n=$_POST["n"];
$t;
$p;
if ($n<=300) {
    echo"el alquiler cuesta 300000$";
} else {
    if ($n>300&&$n<=1000) {
        $t=300000+(15000*($n-300));
        $p=$t*0.2;
        echo"el valor del alquiler es $t $<br>";
        echo"El valor del impuesto es $p $";
    } else {
        $t=10800000+(10000*($n-1000));
        $p=$t*0.2;
        echo"El valor del alquiler es de $t $<br>";
        echo"El valor del impuesto es $p $";
    }
    
}



?>


