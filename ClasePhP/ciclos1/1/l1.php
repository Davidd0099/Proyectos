<?php
$pos = 0;
$neg = 0;
$neu = 0;
for ($i=0; $i < 20; $i++) { 
    if ($_POST["n" . $i] > 0) {
        $pos++;
    }elseif ($_POST["n" . $i] < 0) {
        $neg++;
    }else {
        $neu++;
    }
}


echo"La cantidad de nuemros positivos es " . $pos . " jajasalu2";
echo"<br>";
echo"La cantidad de nuemros negativos es " . $neg . " jajasalu2";
echo"<br>";
echo"La cantidad de nuemros neutros es " . $neu . " jajasalu2";
echo"<br>";
?> 