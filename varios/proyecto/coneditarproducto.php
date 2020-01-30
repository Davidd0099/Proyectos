<?php
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }
if ($_FILES['imagen']['name'] != "") {
   
    
if ((($_FILES['imagen']['type'] == "image/jpeg") or ($_FILES['imagen']['type'] == "image/jpg") or ($_FILES['imagen']['type'] == "image/png"))){
      
$dir_subida = 'img2/';
$fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);


if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} 
            $id = $_POST["id"];
            $name = $_POST["nombre"];
            $sub = $_POST["sublinea"];
            $des = $_POST["descripcion"];
            $img = "http://localhost/proyecto/".$fichero_subido;
            $pay = $_POST["valor"];
            $can = $_POST["cantidad"];
            $iva = $_POST["iva"];
            $prov = $_POST["proveedor"];







$mysqli->real_query("SELECT * FROM sublineadeproducto where desslpro = '$sub'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $sub1 = $fila['idslpro'];
                         }
$mysqli->real_query("SELECT * FROM iva where caniva = '$iva'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $iva1 = $fila['idiva'];
                         }


    $mysqli->query("update producto set nombrePro='$name', imagenes='$img', canpro = '$can', despro='$des', vlrpro='$pay', ivapro='$iva1', idprov1='$prov', idslpro1='$sub1' where idpro = '$id'");

    header("location:perfil.php");
    }else{
    echo "Error en formato de imagen";
}
}else{
$id = $_POST["id"];
 $name = $_POST["nombre"];
$sub = $_POST["sublinea"];
$des = $_POST["descripcion"];
$pay = $_POST["valor"];
$can = $_POST["cantidad"];
$iva = $_POST["iva"];
$prov = $_POST["proveedor"];

$mysqli->real_query("SELECT * FROM sublineadeproducto where desslpro = '$sub'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $sub1 = $fila['idslpro'];
                         }
$mysqli->real_query("SELECT * FROM iva where caniva = '$iva'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $iva1 = $fila['idiva'];
                         }
$mysqli->real_query("SELECT * FROM proveedor where nomprov = '$prov'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $prov1 = $fila['idprov'];
                         }


    $mysqli->query("update producto set nombrePro='$name', canpro = '$can', despro='$des', vlrpro='$pay', ivapro='$iva1', idprov1='$prov1', idslpro1='$sub1' where idpro = '$id'");

header("location: perfil.php");
}
?>
