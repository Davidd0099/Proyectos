<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "proyecto");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    //echo "Opppss, el servidor esta en mantenimiento";
    exit();
}





//$mysqli->query("SELECT * FROM empleado where id = '".$_GET["id"]."'");

$mysqli->real_query("SELECT * FROM usuario where idusu = '" . $_SESSION["id"] . "'");
$resultado = $mysqli->use_result();

while ($fila = $resultado->fetch_assoc()) {

    $nombre = $fila["nomusu"];
    $apellidos = $fila["apeusu"];
    $telefono = $fila["telusu"];
    $direccion = $fila["dirusu"];
    $correo = $fila["emausu"];
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
    .navbar-login {
        width: 305px;
        padding: 10px;
        padding-bottom: 0px;
    }

    .navbar-login-session {
        padding: 10px;
        padding-bottom: 0px;
        padding-top: 0px;
    }

    .icon-size {
        font-size: 87px;
    }
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>BigBangTechology</title>
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
            color: #f8f9fa !important
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function() {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <script type="text/javascript">
        function alerta() {
            var mensaje;
            var opcion = confirm("Esta Seguro Que Quiere Eliminar Su Cuenta? Esta Accion No Se Podra Deshacer");
            if (opcion == true) {
                return true;
            } else {
                return false;
            }

        }
    </script>
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
                <a href="carrito.php" class="btn btn-success btn-block" style="color: black">
                    <h4>Mi carrito</h4><img width="26" height="26" src="img/icons/carrito.png">
                </a>
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
                                            <p class="text-left small"><?php echo $correo; ?></p>
                                            <p class="text-left">
                                                <a href="editarUsuario.php" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                            </p>

                                            <p class="text-left">
                                                <?php echo " <a href='eliminar.php?id=" . $fila['id'] . "' class='btn btn-primary btn-block btn-s' onclick=' return alerta()'><span class='glyphicon glyphicon-remove'></span> eliminar cuenta</a>";   ?>
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
    <br><br><br>
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Crear Productos
                        </h2>
                        <br>
                        <!-- Subheading -->
                        <div class="tcrud">
                            <center>
                                <form enctype="multipart/form-data" action="insertarproducto.php" method="POST">
                                    <!--id  nompro  vlrpro  canpro  ivapro  idprov1 est_pro idslpro despro -->
                                    <table border="2" bgcolor="#292A39" style="border-color: black">
                                        <tr>
                                            <td>Ingrese la imagen del producto: </td>
                                            <td> <input type="file" name="imagen" required="true"> </td>
                                        </tr>
                                        <tr>
                                            <td>Ingrese el nombre del producto: </td>
                                            <td><input type="text" name="nombre" required="true"></td>
                                        </tr>
                                        <tr>
                                            <td>Ingrese la descripcion del producto: </td>
                                            <td> <textarea name="descripcion" required="true"></textarea> </td>
                                        </tr>
                                        <tr>
                                            <td>Digite el valor del producto: </td>
                                            <td><input type="number" name="valor" required="true" min="0"></td>
                                        </tr>
                                        <tr>
                                            <td>Digite la cantidad del producto en bodega: </td>
                                            <td><input type="number" name="cantidad" required="true"></td>
                                        </tr>
                                        <tr>
                                            <td>Ingrese el iva: </td>
                                            <td><select name="iva" required="true">
                                                    <option></option>
                                                    <?php
                                                    $mysqli = new mysqli("localhost", "root", "", "proyecto");
                                                    if ($mysqli->connect_errno) {
                                                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                        //echo "Opppss, el servidor esta en mantenimiento";
                                                        exit();
                                                    }

                                                    $mysqli->real_query("SELECT * FROM iva");
                                                    $resultado = $mysqli->use_result();

                                                    while ($fila = $resultado->fetch_assoc()) {
                                                        echo "<option value'" . $fila['idiva'] . "'>" . $fila['caniva'] . "</option>";
                                                    }
                                                    ?>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>Ingrese el proveedor: </td>
                                            <td><select name="proveedor" required="true">
                                                    <option></option>
                                                    <?php
                                                    $mysqli = new mysqli("localhost", "root", "", "proyecto");
                                                    if ($mysqli->connect_errno) {
                                                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                        //echo "Opppss, el servidor esta en mantenimiento";
                                                        exit();
                                                    }

                                                    $mysqli->real_query("SELECT * FROM proveedor");
                                                    $resultado = $mysqli->use_result();

                                                    while ($fila = $resultado->fetch_assoc()) {
                                                        echo "<option value'" . $fila['idprov'] . "'>" . $fila['nomprov'] . "</option>";
                                                    }
                                                    ?>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>Elija el tipo de producto: </td>
                                            <td>
                                                <select name="tipo" required="true">
                                                    <option></option>
                                                    <?php
                                                    $mysqli = new mysqli("localhost", "root", "", "proyecto");
                                                    if ($mysqli->connect_errno) {
                                                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                        //echo "Opppss, el servidor esta en mantenimiento";
                                                        exit();
                                                    }

                                                    $mysqli->real_query("SELECT * FROM sublineadeproducto");
                                                    $resultado = $mysqli->use_result();

                                                    while ($fila = $resultado->fetch_assoc()) {
                                                        echo "<option value'" . $fila['idslpro'] . "'>" . $fila['desslpro'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" style="position: middle"><br>
                                                <center><input type="submit" value="Insertar datos"></center><br>
                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </center>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>About</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Informations</h5>
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
                        <li><i class="fa fa-home mr-2"></i> My company</li>
                        <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                        <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Back to top</a>
                    </p>
                    <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
    </script>


</body>

</html>