<?php

if ($_POST["n"] > 0 ){
    echo $_POST["n"]. "es positivo";

}else {
    if ($_POST["n"] < 0) {
        echo $_POST["n"]. "es negativo";
    }else{
        echo $_POST["n"]. "es 0";
    }
}



?>