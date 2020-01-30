<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l4.php">
            Te digo si los numeros son iguales o diferentes a 0 ;)  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame el numero #".$i." baby <input  required='true' type='number' name='n".$i."'/><br>";

                   
                    echo"<br>";

                    

                }
            ?>
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>