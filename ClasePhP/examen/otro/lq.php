<?php

if ($_POST["i"] < $_POST["n"]) {
    operar($_POST["i"],$_POST["n"]);
}else {
    operar($_POST["n"],$_POST["i"]);
}

function operar($a,$b){
    $q = 0;
    for ($i = $a; $i <=$b; $i++) {
        if ($i % 2 == 0) {
            $q = $q + $i;
            echo $i . "+";
        }
    }
    echo "=" . $q;
}


