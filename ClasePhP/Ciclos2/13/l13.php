<?php


$q = 0;
$w = 0;
for ($i = 0; $i < 10; $i++) {

    if ($_POST["n" . $i] < 16) {
        $q++;
    }
    $w = $w + $_POST["n" . $i];
}



if ($q < 10  && ($w / 10) <= 15) {
    echo "es apto";
} else {
    echo "No es apto";
}
