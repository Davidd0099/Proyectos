<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l16.php">
            Te digo el salario de los empleados  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Cuantas horas trabajo el empleado # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>