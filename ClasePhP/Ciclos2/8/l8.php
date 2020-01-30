<?php

    $h;


    for($h = 0; $h <=24; $h++){
        for($m = 0; $m <= 60; $m++){
            for($s = 0; $s<=60; $s++){                   
                for($dc = 0; $dc <= 9999; $dc++){ 
                    echo $h ."h:" . $m . "m:" . $s . "s <br>"; 
                }
            }
        }
    }
    
    ?>