<?php
$age = $_POST["age"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$ec = $_POST["ec"];

if (($age<18 && $age>1) || ($sex == 1 && $ec == "c")) {
    echo"Usted no se manda";
}else{
    echo"$name";
}


?>