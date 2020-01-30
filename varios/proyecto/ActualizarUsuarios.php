<?php
 $mysqli = new mysqli("localhost", "root", "", "proyecto");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

              
             
              $nombre = $_POST["nombre"];
              $apellidos =$_POST["apellidos"];
              $telefono = $_POST["telefono"];
              $direccion =$_POST["direccion"];
              $correo =$_POST["correo"];
               $sexo =$_POST["sexo"];
               $clave =md5($_POST["clave"]);
               $tipo = $_POST["tipo"];
                $numero_doc =$_POST["numero_doc"];
               $ciudad_nac =$_POST["ciudad_nac"];
               $fecha_nac = $_POST["fecha_nac"];
                $ciudad_de_res =$_POST["ciudad_de_res"];

                $mysqli->real_query("SELECT * FROM tipoidentificacion where destide = '$tipo'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $tipo1 = $fila['idtide'];
                         }
                $mysqli->real_query("SELECT * FROM ciudad where nomciu = '$ciudad_nac'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $ciudad_nac1 = $fila['idciu'];
                         }
               $mysqli->real_query("SELECT * FROM ciudad where nomciu = '$ciudad_de_res'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $ciudad_de_res1 = $fila['idciu'];
                         }

          $sql = "UPDATE usuario SET nomusu='$nombre', apeusu='$apellidos' , telusu='$telefono', sexusu='$sexo' , ciunacusu='$ciudad_nac1' , ciuresusu='$ciudad_de_res1', fecnacusu='$fecha_nac' , dirusu='$direccion', emausu='$correo', conusu='$clave', idtide1='$tipo1' , docusu='$numero_doc'  WHERE idusu='".$_POST['id']."'";
           

            if ($mysqli->query($sql) === TRUE) {
   header("location:perfil.php");
    
} else {
    echo "Error updating record: " . $mysqli->error;
}

$mysqli->close();







  ?>

 