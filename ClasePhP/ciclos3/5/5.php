<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l5.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Nunmero #".$i."<input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>