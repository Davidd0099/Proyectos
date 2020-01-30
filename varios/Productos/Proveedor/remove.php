<?php

require_once 'php_action/db_connect.php';

if ($_GET['idprov']) {
	$idprov = $_GET['idprov'];

	$sql = "SELECT * FROM proveedor WHERE idprov = {$idprov}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
	?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>remover provedor</title>
	</head>

	<body>

		<h3>Do you really want to remove ?</h3>
		<form action="php_action/remove.php" method="post">

			<input type="hidden" name="idprov" value="<?php echo $data['idprov'] ?>" />
			<button type="submit">Save Changes</button>
			<a href="index.php"><button type="button">Back</button></a>
		</form>

	</body>

	</html>

<?php
}
?>