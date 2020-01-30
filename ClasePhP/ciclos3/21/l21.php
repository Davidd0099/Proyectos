<?php
print_r($_POST);
$cantidad = $_POST["cantidad"];
$q = 0;
$prom = 0;
$m = 0;
for ($i = 0; $i < $cantidad; $i++) {

    for ($a = 0; $a < 5; $a++) {

        $q = $q + $_POST["n" . $i . "s" . $a];
    }
    $prom = $q / 5;

    if ($prom > 3.5) {
        $m++;
    }
    $q = 0;
    $prom = 0;
}

echo $m . " estudiantes no tienen derecho a examen de nivelacion por que no lo necesitan ";
