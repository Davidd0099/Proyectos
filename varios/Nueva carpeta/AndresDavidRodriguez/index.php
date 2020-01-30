<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <div class="contenedor-form">
		<div class="toggle">
			<span></span>
        <h1>Datos Trabajador</h1>
        <form action="#" method="post">
        Nombre<input type="text" name="name" id="">
        Apellido <input type="text" name="lname" id="">
        Documento <input type="number" name="doc" id="">
        Cargo 
        <input type="radio" name="cargo" id="" value="Administrador">Administrativo 
        <input type="radio" name="cargo" id="" value="Operario">Operario
        <input type="radio" name="cargo" id="" value="Vigilante">Vigilante <br>
        Mes de trabajo<select name="mes" id=""selected="jun">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6" selected>Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select> <br>
        Dias trabajados <input type="number" name="dias" id="" min="1" max="30">
        <input type="submit" value="Calcular">
        </form>

        <?php
        @$name=$_POST['name'];
        @$lname=$_POST['lname'];        
        @$doc=$_POST['doc'];
        @$cargo=$_POST['cargo'];
        @$mes=$_POST['mes'];
        @$dias=$_POST['dias'];
        @$sueldo_base;
        @$subsidio;
        @$total;
        @$s;


        if($cargo=="Administrador"){
            $sueldo_base=2300000;
            $subsidio=0;
            $total=$sueldo_base;
        }else{
            if($cargo=="Operario"){
                $sueldo_base=1000000;
                $subsidio=80000;
                $total=$sueldo_base+$subsidio;

            }else{
                if($cargo=="Vigilante"){
                    $s=1500000;
                    $sueldo_base=((1500000/30)*$dias);
                    $subsidio=((50000/30)*$dias);
                    $total=$sueldo_base+$subsidio;
                }
                    
            }
        }
        
if(isset($_POST['enviar'])){

    
}
        ?>


<table border="1">
    <tr>
        <th colspan="4">
            Tira de pago
        </th>
    </tr>
    <tr>
        <td>
            Mes
        </td>
        <td>
            <?php echo $mes; ?>
        </td>
        <td>
            Documento
        </td>
        <td>
            <?php  echo $doc?>
        </td>
    </tr>
    <tr>
        <td>
            Nombre
        </td>
        <td>
            <?php echo$name ?>
        </td>
        <td>
            Apellido
        </td>
        <td>
            <?php echo$name ?>
        </td>
    </tr>
    <tr>
        <td>
            Cargo
        </td>
        <td>
            <?php echo$cargo ?>
        </td>
        <td>
            Dias trabajados
        </td>
        <td>
            <?php echo$dias ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">
            Total a pagar
        </td>
        <td>
            Subsidio
        </td>
        <td>
            <?php echo$subsidio?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo$total?>
        </td>
    </tr>
</table>
    </div>
</body>
</html>

<table>

</table>