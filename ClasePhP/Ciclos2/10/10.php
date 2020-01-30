<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l10.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Peso de la persona # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                    echo "Edad de la persona # ".$i." <input  required='true' type='Text' name='a".$i."'/><br>";
                    echo"<br>";
                }
            ?>
            
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>