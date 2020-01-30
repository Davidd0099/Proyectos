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


        <?php

            $mysqli = new mysqli("localhost", "root", "", "TPS85");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }
            
            $mysqli->real_query("SELECT * FROM personas");
            $resultado = $mysqli->use_result();

            while ($fila = $resultado->fetch_assoc()) {
                echo " id = " . $fila['id'] . " nombre = " . $fila['nombres'] . " correo = " . $fila['correo'] . " telefono = " . $fila['telefono']  ;
                echo "<br>";
            }

        ?>
    </body>
</html>