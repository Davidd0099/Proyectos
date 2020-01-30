<?php

require("bd.php");
$mysqli->query("insert into empresa values(null,'" . $_POST["nit"] . "','" . $_POST["type"] . "','"
    . $_POST["nameps"] . "','" . $_POST["telps"] . "','" . $_POST["dirps"] . "','" . $_POST["emps"] . "')");


header("location:empresa.php");
