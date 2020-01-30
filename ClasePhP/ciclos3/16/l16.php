<?php
$t = 0;
$m = 0;
$n = 0;
for ($i = 0; $i < 3; $i++) {
    $t = $t + $_POST["n" . $i];
    if ($m < $_POST["n" . $i]) {
        $m = $_POST["n" . $i];
        $n = $i;
    }
}
echo "1 = norte <br>
    2 = sur <br>
    3 = centro<br>";
echo "El total de votantes es " . $t;
echo"<br>";
echo "La zona con mayor numero de votantes es la " . $n . "con" . $m . "votos";
