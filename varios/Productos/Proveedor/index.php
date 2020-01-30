<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>PHP CRUD</title>

	<style type="text/css">
		.manageproveedor {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}
	</style>

</head>

<body>

	<div class="manageproveedor">
		<a href="create.php"><button type="button">añadir proveedor</button></a>
		<table border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Ciudad</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM proveedor";
				$result = $connect->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>
						<td>" . $row['idprov'] . "</td>
						<td>" . $row['nomprov'] . "</td>
						<td>" . $row['idciu1'] . "</td>
						<td>" . $row['dirprov'] . "</td>
						<td>" . $row['telprov'] . "</td>
						<td>" . $row['emaprov'] . "</td>
						<td>
							<a href='edit.php?idprov=" . $row['idprov'] . "'><button type='button'>Edit</button></a>
							<a href='remove.php?idprov=" . $row['idprov'] . "'><button type='button'>Remove</button></a>
						</td>
					</tr>";
					}
				} else {
					echo "<tr><td colspan='6'><center>No Data Avaliable</center></td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>

</body>

</html>