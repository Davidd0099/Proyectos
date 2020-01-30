<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l5.php">
            Convierto numeros negativos a positivos baby ;) <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame el numero #".$i." baby <input  required='true' type='number' name='n".$i."' max = '-1'/><br>";

                   
                    echo"<br>";

                    

                }
            ?>
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>