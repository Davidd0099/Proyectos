 <?php
    session_start();

    if(isset($_SESSION["inicio"])){
        if($_SESSION["inicio"] == true){
        ?>

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 100px;
}    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Usuarios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <script type="text/javascript">
   function alerta()
    {
    var mensaje;
    var opcion = confirm("Esta Seguro Que Quiere Eliminar Su Cuenta? Esta Accion No Se Podra Deshacer");
    if (opcion == true) {
        return true;
    } else {
        return false;
    }
   
}

</script>
<?php
  

    if(isset($_SESSION["inicio"])){
        if($_SESSION["inicio"] == true){
        

    $mysqli = new mysqli("localhost", "root", "", "proyecto");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

            
              
            

          //$mysqli->query("SELECT * FROM empleado where id = '".$_GET["id"]."'");
           
            $mysqli->real_query("SELECT * FROM usuario where idusu = '".$_SESSION["id"]."'");
            $resultado = $mysqli->use_result();

            while ($fila = $resultado->fetch_assoc()) {
              
              $nombre = $fila["nomusu"];
              $apellidos =$fila["apeusu"];
              $telefono = $fila["telusu"];
              $direccion =$fila["dirusu"];
              $correo =$fila["emausu"];
               
          }
    
?>
</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a href="perfil.php"><img src="imagenes/logo.png" width="350" height="120"></a>
    <div class="container">
    	<ul></ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Menu principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrito.php">Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reportes.php">Reportes</a>
                </li>
                <li class="nav-item">
                  
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                
                </div>
                <ul></ul>
                <div class="col">
                    <a href="carrito.php" class="btn btn-success btn-block" style="color: black"><h4>Mi carrito</h4><img width="26" height="26" src="img/icons/carrito.png"> </a>
                </div>
                <ul></ul>
                <ul></ul>
                <div>
                      <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>&nbsp;
                        <strong><?php echo $nombre;  ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php echo $nombre;  ?> <?php echo $apellidos;  ?></strong></p>
                                        <p class="text-left small"><?php  echo $correo; ?></p>
                                        <p class="text-left">
                                            <a href="editarUsuario.php" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                        
                                        <p class="text-left">
                                            <?php  echo " <a href='eliminar.php?id=" . $fila['id'] . "' class='btn btn-primary btn-block btn-s' onclick=' return alerta()'><span class='glyphicon glyphicon-remove'></span> eliminar cuenta</a>";   ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="cerrarsesion.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <ul></ul>
                <ul></ul>
            </ul>
            </form>
        </div>
    </div>
</div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="perfil.php">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- jkgkjh-->
<div>
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
    $(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>

<script type="text/javascript">
   function alerta()
    {
    var mensaje;
    var opcion = confirm("Desea Eliminar El usuario?");
    if (opcion == true) {
        return true;
    } else {
        return false;
    }
   
}

</script>
<div class="container">
    <!--<h3>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h3>
    <hr>-->
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">USUARIOS</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="NOMBRE" disabled></th>
                        <th><input type="text" class="form-control" placeholder="APELLIDO" disabled></th>
                        <th><input type="text" class="form-control" placeholder="SEXO" disabled></th>
                        <th><input type="text" class="form-control" placeholder="DOCUMENTO" disabled></th>
                         <th><input type="text" class="form-control" placeholder="TELEFONO" disabled></th>
                        <th><input type="text" class="form-control" placeholder="DIRECCION" disabled></th>
                        <th><input type="text" class="form-control" placeholder="EMAIL" disabled></th>
                        
                    </tr>
                </thead>
                <tbody>
                     <td>
                    <b>ID</b>
                </td>
                <td>
                   <b value=""> NOMBRES</b>
                </td>
                <td>
                   <b> APELLIDOS</b>
                </td>
                <td>
                   <b> SEXO</b>
                </td>
                <td>
                   <b> DOCUMENTO</b>
                </td>
                <td>
                  <b> TELEFONO</b>
                </td>
                <td>
                    <b>DIRECCION</b>
                </td>
                <td>
                   <b> EMAIL</b>
                </td>
                
                 <td colspan="2">
                   <b> acciones</b>
                </td>
                
               </tr>

        <?php


            $mysqli = new mysqli("localhost", "root", "", "proyecto");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

            if(!empty($_GET["idusu"])){
                $mysqli->query("delete from usuario where idusu = '".$_GET["idusu"]."'");
            }
            



            $mysqli->real_query("SELECT * FROM usuario");
            $resultado = $mysqli->use_result();

  
                             
                       

            while ($fila = $resultado->fetch_assoc()) {
if($fila['rolusu'] == "cliente"){
                echo "
                <tr>
                <td>
                    " . $fila['idusu'] ."
                    </td>
                    
                    <td>
                    " . $fila['nomusu'] . "
                    </td>
                    <td>
                    " . $fila['apeusu'] . "
                    </td>
                    <td>
                    " . $fila['sexusu'] ."
                    </td>
                     <td>
                    " . $fila['docusu'] ."
                    </td>
                    <td>
                    " . $fila['telusu'] . "
                    </td>
                    <td>
                    "  . $fila['dirusu'] . "
                    </td>
                    <td>
                    " . $fila['emausu'] ."
                    </td>
                    
                    <td>
                        
                       

                     <a href='usuarios.php?idusu=" . $fila['idusu'] . "' class='btn btn-danger btn-xs' onclick=' return alerta()'><span class='glyphicon glyphicon-remove' ></span> borrar</a>

                   

                      
                    </td>
                     <td>


                        <a class='btn btn-info btn-xs' href='editar.php?idusu=" . $fila['idusu'] ."'><span class='glyphicon glyphicon-editar'></span> Editar</a> 
                        
                        
                    </td>
                </tr>
                ";

             
            }
            }
        ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>sobre nosotros</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                   tienda virtual creada en colombia .
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informacion</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Big Bang Techology <i class="fa fa-shopping-cart"></i></li>
                    <li><i class="fa fa-envelope mr-2"></i> bigbangtech@hotmail.com</li>
                    <li><i class="fa fa-phone mr-2"></i> +57 329 456 2345</li>
                    <li><i class="fa fa-print mr-2"></i> + 765 4676</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="perfil.php">inicio</a>
                </p>
                <p class="text-right text-muted"><i class="fa fa-shopping-cart"></i> created   by <a href="#"><i>Enrique lozano<br>Daniel Arias<br>Jeffrey Liscue<br>Andres Rodriguez<br></i></a> | <span>SENA-BRETAÑA 2019</span></p>
            </div>
        </div>
    </div>
</footer>   <script type="text/javascript">
        </script>


</body></html>
<?php

}
}else{
            echo "<link href='css/styleerror.css' rel='stylesheet' type='text/css'>
<link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
<script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<!------ Include the above in your HEAD tag ---------->

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='error-template'>
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class='error-details'>
                   debes iniciar sesion para poder ingresar a este sitio
                </div>
                <div class='error-actions'>
                    <a href='InicioSesion.php' class='btn btn-primary btn-lg'><span class='glyphicon glyphicon-home'></span>
                        inicio de sesion </a>
                </div>
            </div>
        </div>
    </div>
</div>";
        }
}}
?>