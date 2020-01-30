<?php

$m = 0;
$n = 0;
for ($i = 0; $i  < 3; $i++) {
    if ($_POST["n" . $i] > $m) {
        $m = $_POST["n" . $i];
        $n = $i;
    }
}

echo "El cantidato ganador es el # " . $n . " con " . $m . " votos";
