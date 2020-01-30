<?php
//incluye la clase Proveedor y CrudProveedor
require_once('crud_proveedor.php');
require_once('proveedor.php');
$crud = new CrudProveedor();
$Proveedor = new Proveedor();
//obtiene todos los Proveedor con el método mostrar de la clase crud
$listaProveedor = $crud->mostrar();
?>

<html>

<head>
    <title>Mostrar Proveedor</title>
</head>

<body>
    <table border=1>

        <head>
            <td>Nombre del proveedor</td>
            <td>Ciudad del proveedor</td>
            <td>Direccion del proveedor</td>
            <td>Telefono del proveedor</td>
            <td>Email del proveedor</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </head>

        <body>
            <?php foreach ($listaProveedor as $Proveedor) { ?>
                <tr>
                    <td><?php echo $Proveedor->getNombreProveedor() ?></td>
                    <td><?php echo $Proveedor->getCiudad() ?></td>
                    <td><?php echo $Proveedor->getDireccionproveedor() ?> </td>
                    <td><?php echo $Proveedor->getTelefono() ?> </td>
                    <td><?php echo $Proveedor->getEmail() ?> </td>
                    <td><a href="actualizar.php?id=<?php echo $Proveedor->getId() ?>&accion=a">Actualizar</a> </td>
                    <td><a href="administrar_proveedor.php?id=<?php echo $Proveedor->getId() ?>&accion=e">Eliminar</a> </td>
                </tr>
            <?php } ?>
        </body>
    </table>
    <a href="index.php">Volver</a>
</body>

</html>