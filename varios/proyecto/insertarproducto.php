<?php
session_start();
?>
<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto");
if ($mysqli->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  //echo "Opppss, el servidor esta en mantenimiento";
  exit();
}

if ((($_FILES['imagen']['type'] == "image/jpeg") or ($_FILES['imagen']['type'] == "image/jpg") or ($_FILES['imagen']['type'] == "image/png"))) {

  $dir_subida = 'img2/';
  $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);


  if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
  }


  // <!--id  nompro  vlrpro  canpro  ivapro  idprov1 est_pro idslpro despro -->
  $img = "http://localhost/proyecto/" . $fichero_subido;
  $name = $_POST["nombre"];
  $des = $_POST["descripcion"];
  $val = $_POST["valor"];
  $can = $_POST["cantidad"];
  $iva = $_POST["iva"];
  $pro = $_POST["proveedor"];
  $tipo = $_POST["tipo"];



  $mysqli->real_query("SELECT * FROM sublineadeproducto where desslpro = '$tipo'");
  $resultado = $mysqli->use_result();

  while ($fila = $resultado->fetch_assoc()) {
    $sub1 = $fila['idslpro'];
  }
  $mysqli->real_query("SELECT * FROM iva where caniva = '$iva'");
  $resultado = $mysqli->use_result();

  while ($fila = $resultado->fetch_assoc()) {
    $iva1 = $fila['idiva'];
  }
  $mysqli->real_query("SELECT * FROM proveedor where nomprov = '$pro'");
  $resultado = $mysqli->use_result();

  while ($fila = $resultado->fetch_assoc()) {
    $pro1 = $fila['idprov'];
  }

  $mysqli->query("insert into producto values(null,'$name','$sub1','$des','$img','$val',null,'$can','$iva1','$pro1')");

  header("location: perfil.php");
} else {
  echo "Error en formato de imagen";
}
?>

