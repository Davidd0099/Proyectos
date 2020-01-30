<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l10.php">
            Te digo el porcentaje de opinion de voto :0  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){                    
                    echo'Opinion del diputado #'.$i.' <select name="n'.$i.'">
                    <option value="1">A favor</option>
                    <option value="2">En contra</option>
                    <option value="3">Se abstiene de votar</option>
                    </select> <br>';
                }
            ?>  
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="A ver to' eso"/>
            <br/>
        </form>
    </body>
</html>