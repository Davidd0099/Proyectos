<?php
$age = $_POST["age"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$ec = $_POST["ec"];

if ($ec == "s" && $age>=18) {
    echo"$age, $name, $sex, $ec";
}else{
    echo"Jaja salu2";
}


?>