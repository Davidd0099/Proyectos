<!DOCTYPE html>
<html>

<head>
	<title>añadir proveedor</title>

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
		<legend>añadir proveedor</legend>

		<form action="php_action/create.php" method="post">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>Nombre</th>
					<td><input type="text" name="nomprov" placeholder="Nombre" /></td>
				</tr>
				<tr>
					<th>Ciudad</th>
					<td><input type="text" name="idciu1" placeholder="Ciudad" /></td>
				</tr>
				<tr>
					<th>Direccion</th>
					<td><input type="text" name="dirprov" placeholder="Direccion" /></td>
				</tr>
				<tr>
					<th>Telefono</th>
					<td><input type="text" name="telprov" placeholder="Telefono" /></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="emaprov" placeholder="Email" /></td>
				</tr>
				<tr>
					<td><button type="submit">Save Changes</button></td>
					<td><a href="proveedor.php"><button type="button">Back</button></a></td>
				</tr>
			</table>
		</form>

	</fieldset>

</body>

</html>