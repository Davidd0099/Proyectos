<html>

<head>
</head>

<body>
    <form method="POST" action="l19.php">

        <?php
        $cantidad = $_POST["cantidad"];

        for ($i = 0; $i < $cantidad; $i++) {
            echo "Nota #" . $i . " Del estudiante # " . $i . " <input  required='true' type='Text' name='n" . $i . "' min = '1' max = '100'/><br>";
        }
        ?>


        <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
        <input type="submit" value="Validar" />
        <br />
    </form>
</body>

</html>