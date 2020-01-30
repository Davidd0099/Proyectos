<?php
$q = 0; 
$t = 0;



for ($i=0; $i < 2 ; $i++) { 
    if ($_POST["n".$i] > 10){
        $q = $_POST["n" . $i] * $_POST["p"];
        $t = $t + ($q * 0.85);
        echo"La persona numero " . $i . " paga " . ($q * 0.85)."<br>";
        echo"<br>";


    }else {
        $q = $_POST["n" . $i] * $_POST["p"];
        $t = $t + $q;
        echo"La persona numero " . $i . " paga " . $q."<br>"; 
        echo"<br>";

    }
}

echo"La tienda recibe " . $t; 






?>