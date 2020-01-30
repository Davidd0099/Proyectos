<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l12.php">

            <?php
                for($i = 0;$i < 3;$i++){
                echo "numero # ".$i." <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>