<?php


for ($i=0; $i < $_POST["cantidad"]; $i++) { 

    if ($_POST["a" . $i] >=18 && (($_POST["p" . $i] == 1) || ($_POST["p" . $i] == 2))) {

     echo $_POST["n" . $i] . " Puede votar<br>";   

    }else {

        echo $_POST["n" . $i] . " no puede votar<br>";

    }
}
 
?>


