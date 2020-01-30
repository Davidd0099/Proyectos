<?php

$mysqli = new mysqli("localhost", "root", "", "proyecto");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    //echo "Opppss, el servidor esta en mantenimiento";
    exit();
}