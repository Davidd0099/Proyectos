<?php
$k = 0;
$kp = 0;

$y = 0;
$yp = 0;

$o = 0;
$op = 0;

$o2 = 0;
$o2p = 0;

for ( $i=0 ; $i < $_POST["cantidad"]; $i++ ) {

    if ( $_POST["a" . $i] >= 0 && $_POST["a" . $i] <= 12 )  {
        $k++;
        $kp = $kp + $_POST["n" . $i];
    }else {
        if ( $_POST["a" . $i] >= 13 && $_POST["a" . $i] <= 29 )  {
            $y++;
            $yp = $yp + $_POST["n" . $i];
        }else {
            if ( $_POST["a" . $i] >= 30 && $_POST["a" . $i] <= 59 )  {
                $o++;
                $op = $op + $_POST["n" . $i];
            }else {
                if ( $_POST["a" . $i] >= 60 )  {
                    $o2++;
                    $o2p = $o2p + $_POST["n" . $i];
                }
            }
        }
    }
} 
echo"El numero de niños es " . $k . " y la media de peso es " . ( $kp / $k );
echo"<br>";

echo"El numero de jovenes es " . $y . " y la media de peso es " . ( $yp / $y );
echo"<br>";

echo"El numero de adultos es " . $o . " y la media de peso es " . ( $op / $o );
echo"<br>";

echo"El numero de viejos es " . $o2 . " y la media de peso es " . ( $o2p / $o2 );
echo"<br>";
?>
