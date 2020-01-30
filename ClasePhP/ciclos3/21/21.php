<html>

<head>
</head>

<body>
    <form method="POST" action="l21.php">
        <br>
        <?php
        $cantidad = $_POST["cantidad"];

        for ($i = 0; $i < $cantidad; $i++) {
            for ($a = 0; $a < 5; $a++) {
                echo "Nota del estudiante #" . $i . " nota " . $a . " <input  required='true' type='number' name='n" . $i . "s" . $a . "' min ='0' max ='100'/><br>";
            }
            echo"<br>";
        }
        ?>

        <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
        <input type="submit" value="Validar" />
        <br />
    </form>
</body>

</html>