<?php
$s = 0;
$n = 100;

while ($n != 0) {
    echo $n . "+";
    $s = $s + $n;
    $n--;
}

echo "=" . $s;
