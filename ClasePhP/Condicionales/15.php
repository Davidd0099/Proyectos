<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l15.php">
            Te digo el numero de numero medio de 3 numeros :0 <br>
            <?php
                for($i = 0;$i < 3;$i++){
                echo "numero # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>