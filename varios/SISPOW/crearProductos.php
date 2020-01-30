<html>
    <head>
    </head>
    <body>
        <form enctype="multipart/form-data" action="ConInsertar.php" method="POST">
            Digite nombre = <input type="text" name="nombre" required="true">
            <br>
            Digite valor = <input type="number" name="valor" required="true">
            <br>
            Seleccione imagen = <input type="file" name="imagen" required="true">
            <br>
            <input type="submit" value="Insertar">
        </form>


        <table border="1">

        <tr>
            <td>
                Id
            </td>
            <td>
                Nombre
            </td>
            <td>
                Valor
            </td>
            <td>
                Imagen
            </td>
        </tr>
        <?php
            require("PersistenciaAPI.php");
            $obj = new Persistencia();
            $resultado = $obj->consultar("SELECT * FROM productos");
    
            while ($fila = $resultado->fetch_assoc()) {
                
                echo "        
                <tr>
                    <td>
                    " . $fila['id'] . " 
                    </td>
                    <td>
                    " . $fila['nombre'] . "
                    </td>
                    <td>
                    " . $fila['valor'] . "
                    </td>
                    <td>
                    <img width='200' src='" . $fila['foto']."'></img>
                    </td>
                </tr>
                ";                
   
                echo "<br>";
            }

        ?>

        </table>
    </body>
</html>