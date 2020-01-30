<?php


$p = 0 ;

for ($i=0; $i < $_POST["cantidad"]; $i++) { 
    $p = $p + $_POST["n" . $i]
    if ( ( $p / $_POST["cantidad"] ) >= 4 ) {
        echo"El alumno tiene que pagar " . ( ( $_POST["cantidad"] * $_POST["v"] ) * 0.7 ) . " peso" ;
    }else {
        echo"El alumno tiene que pagar " . ( ( $_POST["cantidad"] * $_POST["v"] ) * 1.1 ) . " peso" ; 
    }

    
}
 ?>