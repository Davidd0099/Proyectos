<html>

<head>
</head>

<body>
    <form method="POST" action="l22.php">
         <br>
        <?php

        for ($i = 0; $i < 3; $i++) {
            
                echo "candidato #" . $i . " <input  required='true' type='number' name='n" . $i . "' /><br>";
            
            echo"<br>";
        }
        ?>

        <input type="submit" value="Validar" />
        <br />
    </form>
</body>

</html>