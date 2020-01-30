<?php
    //print_r($_REQUEST);
    //echo (count($_POST) - 1);

    $valor = 0;
    for($i=0;$i<$_POST["cantidad"];$i++){
        $valor = $valor + $_POST["n".$i];
    }

    //$valor = $_POST["n1"];

    $tipoPago = $_POST["radio"];

    $porcentajeAPagarConDescuento = 0;
    if($valor <= 100000){
        if($tipoPago == "Efectivo"){
            $porcentajeAPagarConDescuento = 0.8;
        }else if($tipoPago == "Tarjeta"){
            $porcentajeAPagarConDescuento = 0.9;
        }
    }else if($valor <= 200000){
        if($tipoPago == "Efectivo"){
            $porcentajeAPagarConDescuento = 0.7;
        }else if($tipoPago == "Tarjeta"){
            $porcentajeAPagarConDescuento = 0.85;
        }
    }else{
        if($tipoPago == "Efectivo"){
            $porcentajeAPagarConDescuento = 0.6;
        }else if($tipoPago == "Tarjeta"){
            $porcentajeAPagarConDescuento = 0.8;
        }
    }

    echo "El valor a pagar es de  : ".($valor*$porcentajeAPagarConDescuento);
 
?>