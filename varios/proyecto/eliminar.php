<?php
 session_start();

    $mysqli = new mysqli("localhost", "root", "", "proyecto");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

            if(!empty($_SESSION["id"])){
                $mysqli->query("delete from usuario where idusu = '".$_SESSION["id"]."'");

            } 
             header("location:cerrarsesion.php");
            ?>