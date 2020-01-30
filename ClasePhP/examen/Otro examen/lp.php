<?php
print_r($_POST);
$age = $_POST["month"];
$hemo = $_POST["hemo"];

if ($age == 0 || $age == 1 ) {
    if ($hemo >= 13 && $hemo <= 26) {
        echo "No es diabetico";
    }else {
        echo "Es dibetico";
        }
    }else {
    if ($age > 1 && $age <= 6 ) {
        if ($hemo >= 10 && $hemo <= 18) {
            echo "No es diabetico";
        }else {
            echo "Es dibetico";
        }
    }else {
        if ($age > 6 && $age <= 12 ) {
            if ($hemo >= 11 && $hemo <= 15) {
                echo "No es diabetico";
            }else {
                echo "Es dibetico";
            }
        }else {
            if ($age > 12 && $age <= 60 ) {
                if ($hemo >= 11 && $hemo <= 15) {
                    echo "No es diabetico";
                }else {
                    echo "Es dibetico";
                }
            }else {
                if ($age > 60 && $age <= 120 ) {
                    if ($hemo >= 12.6 && $hemo <= 15.5) {
                        echo "No es diabetico";
                    }else {
                        echo "Es dibetico";
                    }
                }else {
                    if ($age > 120 && $age <= 180 ) {
                        if ($hemo >= 13 && $hemo <= 15.5) {
                            echo "No es diabetico";
                        }else {
                            echo "Es dibetico";
                        }
                    }
                }
            }
        }
    }
}
?>