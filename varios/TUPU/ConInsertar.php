<?php
    $mysqli = new mysqli("localhost", "root", "", "TPS85");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    $mysqli->query("insert into personas values(null,'".$nombre."','".$correo."','".$telefono."')");

    echo "<br>Guardo el usuario corrctamente";
    echo "<a href='UIInsertar.php'>Crear otra persona</a>";

?>