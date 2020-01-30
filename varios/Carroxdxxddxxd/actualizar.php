<?php
// conexion con base de datos
include 'config/database.php';
 
// obtener la identificación del producto
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
$quantity=intval($quantity);
$user_id=1;
 
// borra consulta
$query = "UPDATE cart_items SET quantity=? WHERE product_id=? AND user_id=?";
 
// prepara consulta
$stmt = $con->prepare($query);
 
// valores de enlace
$stmt->bindParam(1, $quantity);
$stmt->bindParam(2, $id);
$stmt->bindParam(3, $user_id);
 
// ejecuta consulta
if($stmt->execute()){
    // redirigir y decir que el producto del usuario fue eliminado
    header('Location: carro.php?action=quantity_updated&id=' . $id . '&name=' . $name);
}
 
// si la eliminación falló
else{
    // redirigir y decirle al usuario que falló
    header('Location: carro.php?action=failed&id=' . $id . '&name=' . $name);
}
?>