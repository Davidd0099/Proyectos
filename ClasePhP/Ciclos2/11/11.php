<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l11.php">
            Precio de la naranja por kilo<input type="number" name="p" id=""> <br>
            <?php

                for( $i = 0 ; $i < 2 ; $i++ ){
                    echo "kilos que compra la persona # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                    
                    echo"<br>";
                }
            ?>
            

            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>