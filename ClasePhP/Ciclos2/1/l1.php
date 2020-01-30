<?php
$t=0;


for ($i=0; $i == $_POST["n" . $i]; $i++) { 
    $t= $t + $_POST["n".$i];
}

echo"El promedio del estudiante es " . ($t / $_POST["cantidad"]);

?>