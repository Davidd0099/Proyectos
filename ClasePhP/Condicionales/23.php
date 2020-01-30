<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l23.php">
            Te digo cosas que me da flojera especificar :0  <br>
           
                Cual es tu codigo? <input  required="true" type="Text" name="id"/><br>
                Como te llamas baby?<input type="text" name="name" id=""> <br>
                <?php
                for($i = 0;$i < 3;$i++){
                echo "Dame la nota  # ".$i." baby <input  required='true' type='Text' name='n".$i."'/><br>";
                }
            ?>
        
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>