<?php

$a=0;
$ros=0;
$roj=0;
$v=0;
$az=0;


for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    $n = rand(0,9);
    if ($n == 1 || $n == 2) {
        $a++;
    }else {
        if ($n == 4 || $n == 3) {
            $ros++;
        }else {
            if ($n == 5 || $n == 6) {
                $roj++;
            }else {
                if ($n == 7 || $n == 8) {
                    $v++;
                }else {
                    if ($n == 9 || $n == 0) {
                        $az++;
                    }
                }
            }
        }
    }
}

Echo"pasaron " . $a . "con calcomania amarila";
echo"<br>"
Echo"pasaron " . $ros . "con calcomania rosa";
echo"<br>"
Echo"pasaron" . $roj . "con calcomania roja";
echo"<br>"
Echo "pasaron " . $v . "con calcomania verde";
echo"<br>"
Echo "pasaron " . $az . "con calcomania azul";
 






?>