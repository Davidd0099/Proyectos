<?php
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];

    if ($a>$b&&$a>$c) {
        echo"$a es el mayor";
    } else {
        if($b>$a&&$b>$c){
            echo"$b es el mayor";
        }else{
            echo"$c es el mayor";
        }
    }
    

   ?>