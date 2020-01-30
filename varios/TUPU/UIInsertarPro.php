<html>
    <head>
    </head>
    <body>
        <form action="ConInsertar.php" method="POST">
            Digite nombre = <input type="text" name="nombre" required="true">
            <br>
            Digite correo = <input type="email" name="correo" required="true">
            <br>
            Digite telefono = <input type="number" name="telefono" required="true" min='1000000000' max='9999999999'>
            <br>
            <input type="submit" value="Insertar">
        </form>

        <table border="1">

            <tr>
                <td>
                    id
                </td>
                <td>
                    nombre
                </td>
                <td>
                    correo
                </td>
                <td>
                    telefono
                </td>
                <td>
                    acciones
                </td>
            </tr>

        <?php

            $mysqli = new mysqli("localhost", "root", "", "TPS85");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

            if(!empty($_GET["id"])){
                $mysqli->query("delete from personas where id = '".$_GET["id"]."'");
            }
            



            $mysqli->real_query("SELECT * FROM personas");
            $resultado = $mysqli->use_result();

            while ($fila = $resultado->fetch_assoc()) {

                echo "
                <tr>
                    <td>
                    " . $fila['id'] ."
                    </td>
                    <td>
                    " . $fila['nombres'] . "
                    </td>
                    <td>
                    " . $fila['correo'] . "
                    </td>
                    <td>
                    " . $fila['telefono'] ."
                    </td>
                    <td>
                        <a href='UIInsertarPro.php?id=" . $fila['id'] ."'>Eliminar</a>
                    </td>
                </tr>
                ";

             
            }
        ?>

        </table>
    </body>
</html>