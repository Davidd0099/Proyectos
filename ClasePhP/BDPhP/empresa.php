<?php
require("bd.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="1">
            <tr>
                <td>
                    id
                </td>
                <td>
                    Nit
                </td>
                <td>
                    Tipo de empresa
                </td>
                <td>
                    Nombre de la Empresa
                </td>
                <td>
                    Telefono de la empresa
                </td>
                <td>
                    Direccion de la empresa
                </td>
                <td>
                    Email de la empresa
                </td>
                <td>
                    Eliminar empresa
                </td>
                <td>
                    Editar empresa
                </td>
                <td>
                    Listas de empleados
                </td>
            </tr>
            <?php
            $mysqli->real_query("SELECT * FROM empresa");
            $resultado = $mysqli->use_result();
            while ($fila = $resultado->fetch_assoc()) {
                echo "
                <tr>
                    <td>
                    " . $fila['numeroIdEmpresa'] . "
                    </td>
                    <td>
                    " . $fila['nit'] . "
                    </td>
                    <td>
                    " . $fila['topEmpresa'] . "
                    </td>
                    <td>
                    " . $fila['nombre'] . "
                    </td>
                    <td>
                    " . $fila['telefono'] . "
                    </td>
                    <td>
                    " . $fila['direccion'] . "
                    </td>
                    <td>
                    " . $fila['email'] . "
                    </td>
                    <td>
                    <form action='borrarps.php' method='post'>
                        <input type='submit' value='Eliminar' >
                        <input type='hidden' name='id' value = '" . $fila["numeroIdEmpresa"] . "'>
                    </form>
                    </td>
                    <td>
                    <a href='editarempresa.php'>Editar</a>
                    </td>
                    <td>
                    <a href='allempleados.php'>Lista de empleados</a>
                    </td>
                </tr>
                ";
            }
            ?>
            <form action="empresa.php" method="post">
                <input type="submit" value="Crear" name="Crear">
            </form>
            <form action="crearps.php" method="POST">
                <?php
                if (isset($_POST["Crear"])) {

                    echo '<table border="1">
               <tr>
                   <td>
                       Nit de la empresa
                   </td>
                   <td>
                       <input type="text" name="nit" required="true">
                   </td>
               </tr>
               <tr>
                   <td>
                       Tipo de empresa
                   </td>
                   <td>
                       <select name="type" id="" required="true">
                           <option value="micro">Microempresa</option>
                           <option value="pequeña">Pequeña Empresa</option>
                           <option value="mediana">Mediana empresa</option>
                           <option value="grande">Grande empresa</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td>
                       Nombre de la empresa
                   </td>
                   <td>
                       <input type="text" name="nameps" id="" required="true">
                   </td>
               </tr>
               <tr>
                   <td>
                       Telefono de la empresa
                   </td>
                   <td>
                       <input type="tel" name="telps" id="" required="true">
                   </td>
               </tr>
               <tr>
                   <td>
                       Direccion de la empresa
                   </td>
                   <td>
                       <input type="text" name="dirps" id="" required="true">
                   </td>
               </tr>
               <tr>
                   <td>
                       Email de la empresa
                   </td>
                   <td>
                       <input type="email" name="emps" id="" required="true">
                   </td>
               </tr>
            </table>
           <input type="submit" value="send">';
                }
                ?>
            </form>
            <a href="/ClasePhP/BDPhP">Volver</a>
    </center>
</body>

</html>