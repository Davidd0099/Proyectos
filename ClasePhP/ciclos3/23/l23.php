<?php




$cantidad = $_POST["cantidad"];
$q = 0;
$prom = 0;
$m = 0;
for ($i = 0; $i < $cantidad; $i++) {
    
        $q = $q + $_POST["n" . $i ];
    
}

echo"EL total de ventas es " . $q . " y pasaron  . ". $cantidad. " clientes por la tienda ";