<?php
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }
    // <!--id  nompro  vlrpro  canpro  ivapro  idprov1 est_pro idslpro despro -->
 
    $nom = $_POST["nombre"];
    $val = $_POST["valor"];
    $can = $_POST["cantidad"];
    $iva = $_POST["iva"];
    $pro = $_POST["proveedor"];
    $tipo = $_POST["tipo"];
    $id = $_POST["id"];
   
    $mysqli->real_query("SELECT * FROM sublineadeproducto where desslpro = '$tipo'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $sub1 = $fila['idslpro'];
                         }

    $mysqli->query("insert into producto values($id,'$sub1','$nom','$val',null,'$can',$iva,'$pro')");

header("location:productos.php");
?>

