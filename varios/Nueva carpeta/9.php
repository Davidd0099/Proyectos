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
    <input type="number" name="num1" id="" placeholder="Ingrese la cantidad de camisas">
    <input type="number" name="num2" id="" placeholder="El valor de las camisas">
    <input type="submit" value="envio">
    </form>
    <?php
    $a=$_POST['num1'];
    $b=$_POST['num2'];

    if($a<=3){
        echo"El cliente debe pagar $".(($a*$b)*0.1)."por $a camisas";
    }else{
        if($a>3 && $a<5){
            echo"El cliente debe pagar $".(($a*$b)*0.2)."por $a camisas";
        }else{
            if ($a>=5) {
                echo"El cliente debe pagar $".(($a*$b)*0.4)."por $a camisas";
            }
        }
    }
    ?>
</body>
</html>