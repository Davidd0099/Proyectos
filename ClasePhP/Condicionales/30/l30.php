<?php

$q= 0;

for ($i=0; $i < $_POST["cantidad"]; $i++) { 
   if ( $_POST["n" . $i] > $q) {
       $q = $_POST["n" . $i];
   }  
}

echo $q;
?>