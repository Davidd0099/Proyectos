<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l3.php">
        Dame numeros que usare para cosas que me da pereza especificar
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Numero #".$i." a votar <input  required='true' type='number' name='n".$i."'/><br>";
                }
            ?>
        
            
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>