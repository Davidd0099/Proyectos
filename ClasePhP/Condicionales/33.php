<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l33.php">
            Te digo cosas que meda flojera especificar :0  <br>
            <?php
                for($i = 0;$i < 3;$i++){
                echo "Dame la nota # ".$i." baby <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>