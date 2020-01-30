<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l32.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Valor a pagar # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <br/>
            Tipo Pago : Efectivo:<input type='radio'  required="true" value = "Efectivo" name="radio"/>
                        Tarjeta:<input type='radio'  required="true" value = "Tarjeta" name="radio"/>
            <br/>
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>