<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="minutos" id="" placeholder="Ingrese una cantidad de minutos">
        <input type="submit" value="Enviar">

    </form>

    <?php
    @$a=$_POST['minutos'];
    @$b;
    @$c;
    
    $b=$a*60;
    $c=$a/60;

    echo"$a minutos son $b segundos<br>"; 
    
    echo"$a minutos es $c horas";

    ?>

    
</body>
</html>