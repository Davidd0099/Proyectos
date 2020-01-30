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
    <input type="number" name="num" id="" placeholder="Ingrese la cantidad de horas laboradas">
    <input type="submit" value="envio">
    </form>
    <?php
    $a=$_POST['num'];

    if($a<=40){
        echo"El salario del obrero es $". ($a*2000);
    }else{
        if($a>=40){
            echo"El salario del obrero es igual a $". ((40*2000) + (($a-40)*3000));
        }
    }
    ?>
</body>
</html>