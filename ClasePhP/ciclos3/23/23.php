<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="l23.php" method="post">
        <?php

        $cantidad = $_POST["cantidad"];
        for ($i = 0; $i < $cantidad; $i++) {
            echo "Compra del cliente #" . $i . "<input type ='text' name = 'n" . $i . "'>";
            echo "<br>";
        }
        ?>
        <input type="submit" value="enviar">


        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
    </form>
</body>

</html>