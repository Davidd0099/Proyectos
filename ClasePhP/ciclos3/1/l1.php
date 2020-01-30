<?php
$q = 0;
for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    $q = $q $_POST["n".$i];
}

echo"El promedio  de calificaciones es " . ($q/$_POST["cantidad"]);


?>