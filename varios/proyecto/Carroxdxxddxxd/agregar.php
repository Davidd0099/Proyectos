<?php
// conexion con base de datos
include 'config/database.php';
 
// detalles del producto
$id = isset($_GET['id']) ?  $_GET['id'] : die;
$name = isset($_GET['name']) ?  $_GET['name'] : die;
$quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
$user_id=1;
$created=date('Y-m-d H:i:s');
 
// consulta insertar
$query = "INSERT INTO cart_items SET product_id=?, quantity=?, user_id=?, created=?";
 
// preparar consulta
$stmt = $con->prepare($query);
 
// valores de enlace
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $quantity);
$stmt->bindParam(3, $user_id);
$stmt->bindParam(4, $created);
 
// si la inserción de la base de datos fue exitosa
if($stmt->execute()){
    header('Location: productos.php?action=added&id=' . $id . '&name=' . $name);
}
 
// si falla la inserción de la base de datos
else{
     header('Location: productos.php?action=failed&id=' . $id . '&name=' . $name);
}
 