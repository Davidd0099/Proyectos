<html>
    <head>
    </head>
    <body>
        <form method="POST" action="l6.php">
            Te digo los descuentos que recibieron los clientes del dia ;)  <br>
            <?php
                $cantidad = $_POST["cantidad"];

                for($i = 0;$i < $cantidad;$i++){
                    echo "Dame el valor de la compra de la persona #".$i." baby 
                    <input  required='true' type='number' name='n".$i."'/><br>";                    
                    echo"Bola que saco la persona #".$i." <select name='ball'>
                    <option value='1'>Bola roja</option>
                    <option value='2'>Bola amarilla</option>
                    <option value='3'>Bola blanca</option>
                </select> <br>";
                }
            ?>        
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Validar"/>
            <br/>
        </form>
    </body>
</html>