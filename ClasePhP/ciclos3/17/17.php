<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="l17.php" method="post">


        <?php
        $cantidad = $_POST["cantidad"];

        for ($i = 0; $i < $cantidad; $i++) {
            echo "Copias tipo offset solicitadas por el cliente #" . $i . "<input  required='true' type='Text' name='n" . $i . "'/><br>";
            echo "Copias tipo estandar solicitadas por el cliente #" . $i . "<input  required='true' type='Text' name='i" . $i . "'/><br>";
        }
        ?>
        <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">

        <input type="submit" value="Enviar">
    </form>
</body>

</html>