<?php
$cantidad = $_POST["cantidad"];
$q = 0;
for ($i = 0; $i < $cantidad; $i++) {
    for ($a = 0; $a < 3; $a++) {
        $q = $q + ($_POST["n" . $i . "s" . $a] * 0.1);
    }
    echo "Elempleado " . $i . " gana por comisiones " . $q;
    echo "<Br>";
    echo "Elempleado " . $i . " gana en total " . ($q + $_POST["n" . $i]);
}
