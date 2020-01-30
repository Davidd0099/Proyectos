<?php
$h = 0;
$m = 0;
for ($i = 0; $i < $_POST["cantidad"]; $i++) {
    if ($_POST["n" . $i] == 1) {
        $h++;
    } else {
        $m++;
    }
}

echo "Hay " . $h . " hombres <br>";
echo "Hay " . $m . " mujeres <br>";
?>