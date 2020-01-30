<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l13.php">
            Es apto? <input type="number" name="p" id="">
            <?php

                for( $i = 0 ; $i < 10 ; $i++ ){
                    echo "Tiempo del dia # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                    echo"<br>";
                }
            ?>
            
        
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>