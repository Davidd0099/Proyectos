<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l15.php">
            Te digo el salario de los empleados  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    for ($a = 0; $a < 3; $a++) { 
                        echo "Empleado #".$i." Venta ".$a." <input  required='true' type='number' name='n".$i."s".$a."'/><br>";
                    } 
                    echo "salario Empleado #".$i." <input  required='true' type='number' name='n".$i."'/><br>"; 
                    echo"<br>";
                }
            ?>
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>