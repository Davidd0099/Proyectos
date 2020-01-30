<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l2.php">

            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Nombre de la persona #".$i." a votar <input  required='true' type='Text' name='n".$i."'/><br>";

                    echo "Edad de la persona #".$i." a votar <input  required='true' type='Text' name='a".$i."'/><br>";

                    echo"Nacionalidad de la persona #".$i."a votar <select name='p".$i."'>
                    <option value='1'>Colombiano</option>
                    <option value='2'>Colombiana</option>
                    <option value='3'>Otro</option>
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