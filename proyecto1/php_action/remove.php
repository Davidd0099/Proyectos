<?php

require_once 'db_connect.php';

if ($_POST) {
	$idprov = $_POST['idprov'];

	$sql = "DELETE FROM proveedor WHERE idprov = {$idprov}";
	if ($connect->query($sql) === TRUE) {
		echo "<p>Removido exitosamente!!</p>";
		echo "<a href='../proveedor.php'><button type='button'>Atras</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}
