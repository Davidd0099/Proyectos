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
<div class="contenedor-form">
		<div class="toggle">
			<span></span>
  <form action="" method="POST">
     
    <input type="number" name="salario" id="" placeholder="Ingrese el salario del accionista">

    Ingrese la antiguedad del accionista<select name="b" id="">
      <option value="1">Menos de 1 año</option>
      <option value="2">1 año o mas y menos de 2 años</option>
      <option value="3">2 años o mas y menso de 5 años</option>
      <option value="4">5 años o mas y menos de 10 años</option>
      <option value="5">10 años o mas</option>
    </select>
    <input type="submit" value="envio">
    </form>
    <?php
    @$a=$_POST['salario'];
    @$b=$_POST['b'];
    @$c;
    @$d;


    if($b=="1"){
      @$c=$a*0.05;
      $d=$a+$c;

      echo"El salario del inversionista es $ $a";
      echo"su prima es de $ $c";
      echo"Gana un total de $ $d";

    }else{
      if($b=="2"){
        @$c=$a*0.07;
        $d=$a+$c;
  
        echo"El salario del inversionista es $ $a";
        echo"su prima es de $ $c";
        echo"Gana un total de $ $d";
      }else{
        if($b=="3"){
          @$c=$a*0.1;
          @$d=$a+$c;
    
          echo"El salario del inversionista es $ $a";
          echo"su prima es de $ $c";
          echo"Gana un total de $ $d";
        }else{
          if($b=="4"){
            @$c=$a*0.15;
            @$d=$a+$c;
      
            echo"El salario del inversionista es $ $a";
            echo"su prima es de $ $c";
            echo"Gana un total de $ $d";
          }else{
            if($b=="5"){
              @$c=$a*0.2;
              @$d=$a+$c;
        
              echo"El salario del inversionista es $ $a";
              echo"su prima es de $ $c";
              echo"Gana un total de $ $d";
            }
          }
        }
      }
    }      
    
    
    ?>
    </div>
</body>
</html>