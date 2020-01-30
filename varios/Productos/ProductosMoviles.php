<button onclick="location.href='CerrarSesion.php'" type="button" class="btn btn-dark">cerrar sesion</button> 
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Import Icon -->
    <link rel="icon" type="image/png" href="assets/img/ico/favicon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="it">
    <meta name="keywords" content="Rapoo,creative, agency, startup, Mobicon,onepage, clean, modern,business, company,it">
    <meta name="author" content="Dreambuzz">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/themify/themify-icons.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <title>Plantilla</title>
</head>


<body class="top-header">

    <!-- LOADER TEMPLATE -->
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <img src="assets/img/ico/favicon.png" width="150px" height="150px"> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable">
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarWelcome">
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="about.html" class="nav-link">
                                Ventas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="service.html" class="nav-link">
                                Proveedores
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="productos.php" class="nav-link">
                                Productos
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="project.html" class="nav-link">
                                Empleados
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="contact.html" class="nav-link">
                                Reportes
                            </a>
                        </li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>
    <!-- LATEST BLOG
    ================================================== -->
    <br><br>
    <div class="tcat">
		<center>
			<table border="1">
				<tr>

					<td colspan="3"> <center><img src="img/moviles.png" height="200" width="200"></center>  </td>
					
				</tr>
				<tr>
					<th style="text-align: center" colspan="3">MOVILES</th>
				                </tr>
                 <tr>
                    <td >
                           <table border="1">

            
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Valor
                </th>
                <?php 
                    
                    if($_SESSION["rolcli"] == "admin"){
                             echo "<th>Cantidad Unidades</th>";
                    }
                
                    
                    if($_SESSION["rolcli"] == "admin"){
                             echo "<th>Valor iva</th>";
                    }
                
                    
                    if($_SESSION["rolcli"] == "admin"){
                             echo "<th>ID Proveedor</th>";
                    }

                    
                    if($_SESSION["rolcli"] == "admin"){
                             echo "<th>ID sublinea</th>";
                    }
                 ?>
              
                <th style="text-align: center">
                    _________
                </th>
               
            </tr>

        <?php

            $mysqli = new mysqli("localhost", "root", "", "proyecto");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                exit();
            }

            if(!empty($_GET["idpro"])){
                $mysqli->query("delete from producto where idpro = '".$_GET["idpro"]."'");
            }
            



            $mysqli->real_query("SELECT * FROM producto");
            $resultado = $mysqli->use_result();

           while ($fila = $resultado->fetch_assoc()) {
                if (($fila['idslpro1'] > 5) && ($fila['idslpro1'] < 11)) {
                    # code...
                
//id    nompro  vlrpro  canpro  ivapro  idprov1 est_pro idslpro despro
                echo "
                <tr>
                    <td>
                    " . $fila['idpro'] ."
                    </td>
                    <td>
                    " . $fila['despro'] . "
                    </td>
                    <td>
                    " . $fila['vlrpro'] . "
                    </td>";
                    if($_SESSION["rolcli"] == "admin"){
                             
                    echo "<td>
                    " . $fila['canpro'] ."
                    </td>
                    <td>
                    " . $fila['ivapro'] ."
                    </td>
                    <td>
                    " . $fila['idprov1'] ."
                    </td>
                    <td>
                    " . $fila['idslpro1'] ."
                    </td>";
                   }
                 
                echo "</td>";
                         if($_SESSION["rolcli"] == "admin"){
                            echo "<td><a href='carrito.php'><button><img src='img/carrito.png' width='30' height='30' title='añadir al carrito'></button></a>";
                        }else{
                        echo "<td> <center> <a href='carrito.php'><button><img src='img/carrito.png' width='30' height='30' title='añadir al carrito'></button></a> </center>";
                        }

                        if($_SESSION["rolcli"] == "admin"){
                             echo "<a href='editar_producto.php?idpro=" . $fila['idpro'] ."'><button><img src='img/editar.png' width='30' height='30'title='editar producto'></a>";
                            echo "<button><a href='Productos.php?idpro=" . $fila['idpro'] ."' ><img src='img/eliminar.png' width='30' height='30' title='eliminar producto'></button></td>";
                        }else{
                            echo "</td>";
                        }
                     
                        echo "</tr>";
             
            }
        }
        ?>
            
        </table>
                    
                      
                </tr>
                 <?php
                        if($_SESSION["rolcli"] == "admin"){
                             echo '<tr>
                   <td colspan="3">
                       <center> <a href="crear_producto.php"> <img src="img/plus.png" width="30" height="30" title="crear nuevo"> </a> </center>
                   </td>
               </tr>';
           }
                        ?>
               
            </table>
        </center>
    </div>
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Read our latest news
                        </h2>
                        <!-- Subheading -->
                        <p>
                            Our duty towards you is to share our experience we're reaching in our work path with you.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!-- FOOTER
    ================================================== -->
    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Rapoo
                        </a>
                        <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Account</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Terms and conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Affiliate services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Help and support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Frequently Asked Question
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Products Shop
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                            <a href="#"><i class="fab fa-twitter"></i>Twitter
                            </a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest
                            </a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin
                            </a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>YouTube
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year"><a href="https://themefisher.com/free-bootstrap-templates">Free Bootstrap Templates</a></span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href=".top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slick JS -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/theme.js"></script>

</body>

</html>

