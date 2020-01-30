<?php

require_once 'db_connect.php';

if ($_POST) {
	$nomprov = $_POST["nomprov"];
	$idciu1 = $_POST["idciu1"];
	$dirprov = $_POST["dirprov"];
	$telprov = $_POST["telprov"];
	$emaprov = $_POST["emaprov"];

	$sql = "INSERT INTO proveedor (nomprov, idciu1, dirprov, telprov, emaprov) VALUES ('$nomprov', '$idciu1','$dirprov', '$telprov', '$emaprov')";
	if ($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../proveedor.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}
