<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l5.php">
            Te digo la media de notas, la nota mas baja y la mas alta ;)   <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame la nota del aprendiz #".$i." baby <input  required='true' type='number' name='n".$i."'/><br>";

                   
                    echo"<br>";

                    

                }
            ?>
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>