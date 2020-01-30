<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l28.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "promedio de la materia #".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
            Cuanto cuesta cada materia? <input type="number" name="v" id="">
            
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>