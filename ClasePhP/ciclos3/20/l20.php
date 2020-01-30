<?php
$cantidad = $_POST["cantidad"];
$q = 0;
$prom = 0;
$m = 0;
for ($i = 0; $i < $cantidad; $i++) {
    for ($a = 0; $a < 5; $a++) {
        $q = $q + $_POST["n" . $i . "s" . $a];
    }
    $prom = $q / 5;
    if ($prom > $m) {
        $m = $prom;
        $n = $_POST["n" . $i];
    }
    $q = 0;
    $prom = 0;
}

echo "EL estudiante con codigo " . $n . " saco el mayor promedio de " . $m;
