<?php
//incluye la clase proveedor y crudProveedor
require_once('crud_proveedor.php');
require_once('proveedor.php');

$crud = new CrudProveedor();
$proveedor = new proveedor();

// si el elemento insertar no viene nulo llama al crud e inserta un proveedor
if (isset($_POST['insertar'])) {
    $proveedor->setNombreProveedor($_POST['nomprov']);
    $proveedor->setCiudad($_POST['idciu1']);
    $proveedor->setDireccionproveedor($_POST['dirprov']);
    $proveedor->setTelefono($_POST['telprov']);
    $proveedor->setEmail($_POST['emaprov']);
    //llama a la función insertar definidprova en el crud
    $crud->insertar($proveedor);
    header('Location: index.php');
    // si el elemento de la vista con nomprov actualizar no viene nulo, llama al crud y actualiza el proveedor
} elseif (isset($_POST['actualizar'])) {
    $proveedor->setidprov($_POST['idprov']);
    $proveedor->setNombreProveedor($_POST['nomprov']);
    $proveedor->setCiudad($_POST['idciu1']);
    $proveedor->setDireccionproveedor($_POST['dirprov']);
    $proveedor->setTelefono($_POST['telprov']);
    $proveedor->setEmail($_POST['emaprov']);
    $crud->actualizar($proveedor);
    header('Location: index.php');
    // si la variable accion enviada por GET es == 'e' llama al crud y elimina un proveedor
} elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['idprov']);
    header('Location: index.php');
    // si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
} elseif ($_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}
