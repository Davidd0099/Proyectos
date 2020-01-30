<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="POST">
    <input type="number" name="num1" id="" placeholder="ingrese un numero">
    <input type="number" name="num2" id="" placeholder="ingrese otro numero">
    <input type="submit" value="envio">
    </form>
    <?php
    $numero1=$_POST['num1'];
    $numero2=$_POST['num2'];
    
    if ($numero1==$numero2) {
        echo"$numero1 y $numero2 son iguales";
    }else {
        echo"$numero1 y $numero2 no son iguales";
    }

    ?>
</body>
</html>