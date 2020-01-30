<?php

$n1= $_POST["n1"];
$n2 = $_POST["n2"];

$n3 = $n1 + $n2;

if ($n3 < 0) {
    echo $n1 . " " . $n2;
}else{
    echo"La suma no era negativa jajasalu2";
}

?>