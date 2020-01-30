<?php

$max = 0;
$min = 0;
$add = 0;

for ($i = 0; $i < $_POST["cantidad"]; $i++) {

    if ($_POST["n" . $i] > $max) {
        $max = $_POST["n" . $i];
    }

    if ($_POST["n" . $i] < $min && $_POST["n" . $i] < 5) {
        $min = $_POST["n" . $i];
    }

    $add = $add + $_POST["n" . $i];
}


echo "La nota mas alta es " . $max;
echo "<br>";
echo "La nota mas maja es " . $min;
echo "<br>";
echo "El promedio de notas es " . ($add / $_POST["cantidad"]);
echo "<br>";
echo "jaja salu2";
?>