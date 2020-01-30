<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l16.php">
            Te digo si un numero es la suma de otros dos numeros :0 <br>
            <?php
                for($i = 0;$i < 3;$i++){
                echo "Dame el numero # ".$i." baby <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>