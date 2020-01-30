<?php

for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    if ($_POST["n" . $i] > 0 ) {
        echo $_POST["n".$i];
    }
}




?>