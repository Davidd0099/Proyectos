<button onclick="location.href='CerrarSesion.php'" type="button" class="btn btn-dark">cerrar sesion</button> 
<?php
session_start();
?>
<!doctype html>
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
    
    <title>Editar Producto</title>
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
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Edictar Producto 
                        </h2>
                        <!-- Subheading -->
                        <div class="tcrud">
        <center>
        	<?php


    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }

//<!--id  nompro  vlrpro  canpro  ivapro  idprov1 est_pro idslpro despro -->
 
     $mysqli->real_query("select *  from producto where idpro = '".$_GET["idpro"]."'");
     $resultado = $mysqli->use_result();
    
     while ($fila = $resultado->fetch_assoc()) {
			$id = $fila["idpro"];
	     	$name = $fila["despro"];
	 	    $pay = $fila["vlrpro"];
	    	$can = $fila["canpro"];
	   		$iva = $fila["ivapro"];
	   		$prov = $fila["idprov1"];

            $sub = $fila["idslpro1"];
      
       
     }

?>
        	          <form action="coneditarproducto.php" method="POST">
            <table class="tbcrud" border="1">
     
        
        	<input type="hidden" name="id" value="<?php echo $id ?>">

            <tr>
            	<td>Número id: </td>
                <td><?php echo $id ?></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="nombre" required="true" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>Valor: </td>
                <td><input type="number" name="valor" required="true" min="0" value="<?php echo $pay ?>"></td>
            </tr>
            <tr>
                <td>Cantidad en bodega: </td>
                <td><input type="number" name="cantidad" required="true" min="0" value="<?php echo $can ?>"></td>
            </tr>
            <tr>
                <td>IVA: </td>
                <td><input type="number" name="iva" required="true" value="<?php echo $iva ?>"></td>
            </tr>
            <tr>
                <td>Digite la id del proveedor: </td>
                <td><input type="number" name="proveedor" required="true" value="<?php echo $prov ?>"></td>
            </tr>
            <tr>
                <td>Seleccione la sublinea: </td>
                <td>
                    <select name="sublinea" required="true" >  
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
                            echo "<option value'".$fila['idslpro']."'>".$fila['desslpro']."</option>";
                         }
                ?>
                    </select>
                </td>
        
            </tr>
            <tr>
                <td colspan="2" style="position: middle"> <center><input type="submit" value="Actualizar datos"></center> </td>
            </tr>

        </table>
    </form>
        </center>
      
    </div>
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