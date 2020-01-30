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
        <input type="number" name="num" id="">
        <input type="submit" value="envio">
    </form>
    <?php
    $numero=$_POST['num'];

    if ($numero%2==0){
        echo "el $numero es par";
    }else{
        echo "el $numero es impar";
    } 
    ?>
</body>
</html>