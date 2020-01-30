<?php
$pos = 0;
$neg = 0;
$neu = 0;
for ($i=0; $i < $_POST["cantidad"]; $i++) { 
    if ($_POST["n" . $i] == 1) {
        $pos++;
    }else{
        if ($_POST["n" . $i]  == 2) {
            $neg++;
        }else {
            $neu++;
        }
    }
    
    
}


echo"La cantidad de diputados a favor es " . ( ( $pos *100 ) / $_POST["cantidad"] ) . "%";
echo"<br>";
echo"La cantidad de diputados en contra es " . ( ( $neg / $_POST["cantidad"] ) * 100 ) . "%";
echo"<br>";
echo"La cantidad de diputados que se abstiene es " . ( ( $neu / $_POST["cantidad"] ) * 100 ) . "%";
echo"<br>";
?> 