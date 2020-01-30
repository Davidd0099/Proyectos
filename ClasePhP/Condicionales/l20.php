<?php

$n = $_POST["n"];
$ph = $_POST["ph"];




if ($n <= 40) {
    $s = $n * $ph;
    echo"A este man le pagan $s a la semana";
}else {
    if ($n > 40 && $n <= 48) {
        $s = ($n*$40) + (($n - 40) * ($ph * 2));
        echo"A este man le pagan $s a la semana";
    }else {
        if ($n > 48) {
            $s = ( ( 40 * $ph ) + ( 8 * ( $ph * 2 ) ) + ( ( $n - 48 ) * ( $ph * 3 ) ) );
            echo"A este man le pagan $s a la semana";
        }
    }
}




?>