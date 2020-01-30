<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l9.php">
            Te digo cuanto dinero gasto la cucha ;)  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame el nombre del producto #".$i." baby <input  required='true' type='text' name='n".$i."'/><br>";
                    echo "Dame la cantidad del producto #".$i." baby <input  required='true' type='number' name='c".$i."'/><br>";
                    echo "Dame el precio por unidad del producto #".$i." baby <input  required='true' type='number' name='p".$i."'/><br>";
                    
                }
            ?>  
                
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>