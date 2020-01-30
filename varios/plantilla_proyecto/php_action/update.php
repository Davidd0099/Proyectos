<?php 

require_once 'db_connect.php';

if($_POST) {
	$idprov = $_POST["idprov"];
	$nomprov = $_POST["nomprov"];
	$idciu1 = $_POST["idciu1"];
	$dirprov = $_POST["dirprov"];
	$telprov = $_POST["telprov"];
	$emaprov = $_POST["emaprov"];

	$idprov = $_POST['idprov'];

	$sql  = "UPDATE proveedor SET nomprov = '$nomprov', idciu1 = '$idciu1', 
	dirprov = '$dirprov', telprov = '$telprov', emaprov = '$emaprov' WHERE idprov = {$idprov}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?idprov=".$idprov."'><button type='button'>Back</button></a>";
		echo "<a href='../proveedor.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}
