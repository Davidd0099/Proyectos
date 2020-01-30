<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l7.php">
            multiplico cosas   <br>
            Dame un numero ;) 
            <input type="number" name="n" id="">
        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>