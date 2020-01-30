<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
   <link rel="stylesheet" type="text/css" href="css/styles.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }
     
    $nombre  = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sexo=$_POST["sexo"];
    $tipo = $_POST["tipo"];
    $numero_doc = $_POST["numero_doc"];
     $ciudad_nac  = $_POST["ciudad_nac"];
    $fecha_nac = $_POST["fecha_nac"];
    $telefono = $_POST["telefono"];
    $ciudad_de_res = $_POST["ciudad_de_res"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    
    

    $mysqli->query("insert into usuario values(null,'".$nombre."','".$apellidos."','".$sexo."','".$tipo."','".$numero_doc."','".$ciudad_nac."','".$fecha_nac."','".$telefono."','".$ciudad_de_res."','".$direccion."','".$correo."','".($clave)."','cliente')");

    

header("location:inicioSesion.php");
?>