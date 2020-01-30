<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l4.php">
Te digo cuantos numeros positivos, negativos y neutros hay :0 <br>
            <?php
                for($i = 0;$i < 20;$i++){
                    echo "Dame el numero  # ".$i." baby <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>