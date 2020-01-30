<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto");
if ($mysqli->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  //echo "Opppss, el servidor esta en mantenimiento";
  exit();
}


$id = $_POST["id"];
$name = $_POST["nombre"];
$pay = $_POST["valor"];
$can = $_POST["cantidad"];
$iva = $_POST["iva"];
$prov = $_POST["proveedor"];
$sub = $_POST["sublinea"];


$mysqli->real_query("SELECT * FROM sublineadeproducto where desslpro = '$sub'");
$resultado = $mysqli->use_result();

while ($fila = $resultado->fetch_assoc()) {
  $sub1 = $fila['idslpro'];
}

$mysqli->query("update producto set despro='$name', vlrpro='$pay', canpro = '$can', ivapro='$iva', idprov1='$prov', idslpro1='$sub1' where idpro = '$id'");

header("location:productos.php");
