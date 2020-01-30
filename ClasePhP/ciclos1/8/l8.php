<?php
$k = 0;

$y = 0;

$o = 0;

for ( $i=0 ; $i < $_POST["cantidad"]; $i++ ) {
    if ( $_POST["n" . $i] >= 0 && $_POST["n" . $i] <= 2 )  {
        $k++;
    }else {
        if ( $_POST["n" . $i] > 2 && $_POST["n" . $i] < 4 )  {
            $y++;
        }else {
            if ( $_POST["n" . $i] >= 4 ){
                $o++;
            }
        }
    }
}
 
echo"El porcentaje de animales de entre 0 y 2 años es " . ( ( $k / $_POST["cantidad"] ) * 100 ) . "%";
echo"<br>";

echo"El porcentaje de animales de entre 2 y 4 años es  " . ( ( $y / $_POST["cantidad"] ) * 100 ) . "%";
echo"<br>";

echo"El porcentaje de naimales de mas de 4 años es  " . ( ( $o / $_POST["cantidad"] ) * 100 ) . "%";
echo"<br>";

?>