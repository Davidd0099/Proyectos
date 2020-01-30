<?php


    //print_r($_FILES['imagen']);
     
    if($_FILES['imagen']['type'] == "image/jpeg"){
   
       
        $dir_subida = 'imagenes/';
        $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);


        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }

        

        require("PersistenciaAPI.php");

        $obj = new Persistencia();
        
        $nombre = $_POST["nombre"];
        $valor = $_POST["valor"];
        $imagen = "http://localhost/SISPOW/".$fichero_subido;

        $obj->inserUpdDel("insert into productos values(null,'".$nombre."','".$valor."','".$imagen."')");

        echo "<br>Guardo el producto corrctamente";

        header("location:crearProductos.php");
        
    }else{
        echo "tipo de archivo no valido";
    }

?>