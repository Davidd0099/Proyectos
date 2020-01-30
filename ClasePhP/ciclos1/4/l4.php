<?php

$cero = 0;
$nocero = 0; 

for ($i=0; $i < $_POST["cantidad"]; $i++) { 
   
if ($_POST["n" . $i] == 0){
    $cero++;
    }else {
        $nocero++;
    }
}
 
echo"Hay " . $cero .  " numeros igual a 0";
echo"<br>";
echo"Hay " . $nocero .  " numeros diferentes a 0";
echo"<br>";
echo "jaja salu2";
?> 