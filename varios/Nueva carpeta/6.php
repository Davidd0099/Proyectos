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
        <input type="number" name="num1" id="" placeholder="ingrese una nota">
        <input type="number" name="num2" id="" placeholder="ingrese otra nota">
        <input type="number" name="num3" id="" placeholder="ingrese otra nota">
        <input type="submit" value="envio">
    </form>
    
    <?php
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];
    $d=($a+$b+$c)/3;

    if($d>=3.5){
        echo"El estudiante aprueba";
    }else{
        echo"El estudiante reprueba";
    }
    

   ?>
</body>
</html>