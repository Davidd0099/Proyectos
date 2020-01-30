
<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }

    $correo = $_POST["correo"];
    $clave = ($_POST["clave"]);
 
    $resultado = $mysqli->query("SELECT * FROM usuario where emausu = '".$correo."' and conusu = '".$clave."'");
    
    if($resultado->num_rows == 0){
        header("location:iniciosesion.php?data=error");
    }else{

        while($fila = mysqli_fetch_array($resultado)){
            //echo ;
           
            $_SESSION["id"] = $fila["idusu"];
            $_SESSION["rolcli"] = $fila["rolusu"];
        
        }

        $_SESSION["inicio"] = true;
        header("location:perfil.php");
        
    }
    


?>