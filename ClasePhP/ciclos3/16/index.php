<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="l16.php" method="post">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "Gente que voto en la zona #" . $i . "<input  required='true' type='Text' name='n" . $i . "' value = ''/><br>";
        }
        ?>
        1 = norte
        2 = sur
        3 = centro
        <input type="submit" value="Enviar">
    </form>
</body>

</html>