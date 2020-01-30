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
    <input type="number" name="num" id="" placeholder="valor de la compra">
    <input type="submit" value="envio">
    </form>
    <?php
    $a=$_POST['num'];

    if($a>5000){
        echo"El cliente paga " . ($a-($a*0.2));
    }else {
        echo"El cliente paga $a";
    }

    ?>
</body>
</html>