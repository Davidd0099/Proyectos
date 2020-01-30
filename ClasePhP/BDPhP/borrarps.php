<?php

require("bd.php");


if (!empty($_POST["id"])) {
    $mysqli->query("delete from empresa where numeroIdEmpresa = '" . $_POST["id"] . "'");
}


header("location:empresa.php");
