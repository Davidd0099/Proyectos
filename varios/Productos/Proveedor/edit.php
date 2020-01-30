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
		<title>editar proveedor</title>

		<style type="text/css">
			fieldset {
				margin: auto;
				margin-top: 100px;
				width: 50%;
			}

			table tr th {
				padding-top: 20px;
			}
		</style>

	</head>

	<body>

		<fieldset>
			<legend>editar proveedor</legend>

			<form action="php_action/update.php" method="post">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<th>Nombre</th>
						<td><input type="text" name="nomprov" placeholder="First Name" value="<?php echo $data['nomprov'] ?>" /></td>
					</tr>
					<tr>
						<th>Ciudad</th>
						<td><input type="text" name="idciu1" placeholder="Last Name" value="<?php echo $data['idciu1'] ?>" /></td>
					</tr>
					<tr>
						<th>Direccion</th>
						<td><input type="text" name="dirprov" placeholder="dirprov" value="<?php echo $data['dirprov'] ?>" /></td>
					</tr>
					<tr>
						<th>Telefono</th>
						<td><input type="text" name="telprov" placeholder="Contact" value="<?php echo $data['telprov'] ?>" /></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="text" name="emaprov" placeholder="Contact" value="<?php echo $data['emaprov'] ?>" /></td>
					</tr>
					<tr>
						<input type="hidden" name="idprov" value="<?php echo $data['idprov'] ?>" />
						<td><button type="submit">Save Changes</button></td>
						<td><a href="proveedor.php"><button type="button">Back</button></a></td>
					</tr>
				</table>
			</form>

		</fieldset>

	</body>

	</html>

<?php
}
?>