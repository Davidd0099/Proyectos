<?php
$host = "localhost";
//cambiar nombre de base de datos a la del proyecto
$db_name = "test_shop";
$username = "root";
$password = "";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//Conexion error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
/*
Yo esto lo hice con dos tablas aparte y con otra plantilla por comodidad
Para que la implementen hay que cambiarle el nombre a la base de datos que 
esto usa y en las consultas el nombre de las tablas product y cart_items
Se puede hacer rapido con un Ctrl + F y ponene product y cart_items
Les recomiendo que por comodidad modifiquen las tablas de la base de datos del proyecto para que cuadren con esto
Solo seria cambair el nombre de los atributos necesarios
de lo contrario, en base a lo que ya esta hecho aqui adaptar las variables y agregar lo necesario
A esto le meti y use unas cosas raras que encontre por ahi pero si se hace al pie de
 la letra lo que dije antes deberia seguir funcionando perfecto

si quierenj pueden usar esta carpeta de base de datos  para organizar mejor ese codigo y que quede mas bonito xd
*/
?>


