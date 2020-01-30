<?php
$q=$_POST["n"];
for ($i=0; $i < 12 ; $i++) { 
$q = $q + ($q * 0.2);
}

echo"El sujeto tiene " . $q . " dinero";

?>