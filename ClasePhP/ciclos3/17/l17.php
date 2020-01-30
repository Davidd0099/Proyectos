<?php


for ($i = 0; $i < $_POST["cantidad"]; $i++) {
    $cpoff = rand(0, 10000);
    $cpest = rand(0, 50000);

    if ($_POST["n" . $i] < $cpoff && $_POST["i" . $i] < $cpest) {
        echo "Se imprimiran " . ($cpoff - $_POST["n" . $i]) . "copias offset";
        echo "<br>";
        echo "Se imprimiran " . ($cpest - $_POST["i" . $i]) . "copias estandar";
        echo "<br>";
    } else {
        echo "Sobre pasa el limite, Fno se imprime nada";
    }
}
