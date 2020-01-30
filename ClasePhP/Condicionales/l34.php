<?php

if($_POST["n"] <= 100000){
    echo"El cliente paga " . ($_POST["n"] * 0.9);
}else{
    if ($_POST["n"] > 100000 && $_POST["n"] <= 200000) {
        echo"El cliente paga " . ($_POST["n"] * 0.75);
    }else {
        echo"El cliente paga " . ($_POST["n"] * 0.65;
    }
}


?>