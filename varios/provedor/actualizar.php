<?php
//incluye la clase Proveedor y CrudProveedor
require_once('crud_proveedor.php');
require_once('proveedor.php');
$crud = new CrudProveedor();
$proveedor = new Proveedor();
//busca el proveedor utilizando el id, que es enviado por GET desde la vista mostrar.php
$proveedor = $crud->obtenerProveedor($_GET['idprov']);
?>
<html>

<head>
    <title>Actualizar proveedor</title>
</head>

<body>
    <form action='administrar_proveedor.php' method='post'>
        <table>
            <tr>
                <input type='hidden' name='idprov' value='<?php echo $proveedor->getId() ?>'>
                <td>Nombre del proveedor:</td>
                <td> <input type='text' name='nomprov' value='<?php echo $proveedor->getNombreProveedor() ?>'></td>
            </tr>
            <tr>
                <td>Ciudad del proveedor:</td>
                <td><input type='text' name='idciu1' value='<?php echo $proveedor->getCiudad() ?>'></td>
            </tr>
            <tr>
                <td>Direccion del proveedor:</td>
                <td><input type='text' name='dirprov' value='<?php echo $proveedor->getDireccionproveedor() ?>'></td>
            </tr>
            <tr>
                <td>Telefono del proveedor:</td>
                <td><input type='text' name='telprov' value='<?php echo $proveedor->getTelefono() ?>'></td>
            </tr>
            <tr>
                <td>Email del proveedor:</td>
                <td><input type='text' name='emaprov' value='<?php echo $proveedor->getEmail() ?>'></td>
            </tr>
            <input type='hidden' name='actualizar' value'actualizar'>
        </table>
        <input type='submit' value='Guardar'>
        <a href="index.php">Volver</a>
    </form>
</body>

</html>