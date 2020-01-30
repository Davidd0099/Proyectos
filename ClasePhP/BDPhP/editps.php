<?php 

require_once 'db_connect.php';

if($_POST) {
	$numeroIdEmpresa = $_POST["numeroIdEmpresa"];
	$nit = $_POST["nit"];
	$topEmpresa = $_POST["topEmpresa"];
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];

	$numeroIdEmpresa = $_POST['numeroIdEmpresa'];

	$sql  = "UPDATE empresa SET nit = '$nit', topEmpresa = '$topEmpresa', 
	nombre = '$nombre', telefono = '$telefono', direccion = '$direccion', email = '$email' WHERE numeroIdEmpresa = {$numeroIdEmpresa}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?numeroIdEmpresa=".$numeroIdEmpresa."'><button type='button'>Back</button></a>";
		echo "<a href='../proveedor.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}
