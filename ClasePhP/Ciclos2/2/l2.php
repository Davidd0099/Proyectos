<?php
    $cantidad = $_POST["cantidad"];

    for($i = 0;$i < $cantidad;$i++){
        echo "El cubo del numero es " . ($_POST["n" . $i] * $_POST["n" . $i]);
        echo "la cuarta del numero es " . ($_POST["n" . $i] / 4);
    }
?>