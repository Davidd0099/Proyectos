<link rel="stylesheet" href="style.css">
<?php

$a=$_POST["a"];


if ($a<90) {
    echo"$a es un angulo agudo";
} else {
    if ($a=90) {
        echo"$a es angulo un recto";
    } else {
        if ($a>90&&$a<180) {
            echo"$a es un angulo obtuso";
        } else {
            if ($a=180) {
                echo"$a es un angulo llano";
            } else {
                if($a>180&&$a<360){
                    echo"$a es un angulo concavo";
                }
            }
            
        }
        
    }
    
}







?>