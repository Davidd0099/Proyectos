<?php
$r = 0;
for ($i = 0; $i < $_POST["cantidad"]; $i++) {
    if ($_POST["n" . $i] < 70) {
        $r++;
    }
}



echo "El porcentaje de reprobados es " . (($r / $_POST["cantidad"]) * 100);
