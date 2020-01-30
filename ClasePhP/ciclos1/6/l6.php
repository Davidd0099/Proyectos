<?php

$max = 0;
$min = 0;
$add = 0;

for ($i=0; $i < $_POST["cantidad"]; $i++) { 

   if ( $_POST["ball"] == 1 ) {
       echo"El cliente saco una bola de color rojo";
       echo"<br>";
       echo"El cliente paga " . ( $_POST["n" . $i] * 0.6 );
   }else {
       if ($_POST["ball"] == 2) {
            echo"El cliente saco una bola de color amarillo";
            echo"<br>";
            echo"El cliente paga " . ( $_POST["n" . $i] * 0.75 )  ;
        }else {
            echo"El cliente saco una bola de color blanco";
            echo"<br>";
            echo"El cliente paga " . $_POST["n" . $i];
            }
        }
    }


 

?> 