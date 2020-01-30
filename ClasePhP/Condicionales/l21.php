<?php
$p = $_POST["n"];
$vp = $_POST["vp"];


if ($p > 0 && $p <= 2 ) {
    echo "El sujeto paga " . ($vp * $p);
}else {
    if ($p >= 3 && $p <= 5 ) {
        echo "El sujeto paga " . ( ($vp * $p) * 0.9 );
    }else {
        if ($p >= 6 && $p <= 10 ) {
            echo "El sujeto paga " . ( ($vp * $p) * 0.85 );
        }else {
            echo "El sujeto paga " . ( ($vp * $p) * 0.82 );
        }
    }
}



?>