<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l17.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo"Genero de la persona #".$i." <select name='n".$i."'>
                    <option value='1'>Hombre</option>
                    <option value='2'>Mujer</option>
                    </select> <br>";
                    
                    echo"<br>";

                    

                }
            ?>
        
            
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>