<?php
// conexion a base de datos
include 'config/database.php';
 
// obtener la identificación del producto
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$user_id=1;
 
// consulta borrar
$query = "DELETE FROM cart_items WHERE product_id=? AND user_id=?";
 
// preprar consulta
$stmt = $con->prepare($query);
 
// valores de enlace
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $user_id);
 
// ejecutar consulta
if($stmt->execute()){
    // redirect and tell the user product was removed
    header('Location: carro.php?action=removed&id=' . $id . '&name=' . $name);
}
 
// si la eliminación falló
else{
    //redirigir y decirle al usuario que falló
    header('Location: carro.php?action=failed&id=' . $id . '&name=' . $name);
}
?>