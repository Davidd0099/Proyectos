<?php

$c = $_POST["c"];

if ($c < 5) {
    echo"EL cliente paga " . ( ($c * 11000) * 0.9 ) . " peso";
} else {
    if ($c >= 5 && $c < 10) {
        echo"EL cliente paga " . ( ($c * 11000) * 0.8 ) . " peso";
    } else {
        echo"EL cliente paga " . ( ($c * 11000) * 0.6 ) . " peso";
    }
}



?>