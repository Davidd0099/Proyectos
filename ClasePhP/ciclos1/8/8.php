<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l8.php">
            Te digo el porcentaje de animales en un rango de edad  ;)  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame la edad del animal #".$i." baby <input  required='true' type='number' name='n".$i."'/><br>";    
                }
            ?>        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>