<html>

<head>
</head>

<body>
    <form method="POST" action="l20.php">
        <br>
        <?php
        $cantidad = $_POST["cantidad"];

        for ($i = 0; $i < $cantidad; $i++) {
            echo "Codigo del estudiante #" . $i . "<input  required='true' type='number' name='n" . $i . "'/><br>";
            for ($a = 0; $a < 5; $a++) {
                echo "Nota del estudiante #" . $i . " nota " . $a . " <input  required='true' type='number' name='n" . $i . "s" . $a . "'/><br>";
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