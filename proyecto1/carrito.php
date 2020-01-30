<?php
    session_start();

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
    font-size: 87px;
}    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<html lang="en"><head>
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
                    <a class="nav-link" href="proveedor.php">Proveedores</a>
                </li>
                <li class="nav-item">
                  <?php
                        if($_SESSION["rolcli"] == "admin"){
                             echo '<a class="nav-link" href="usuarios.php">Usuarios</a>';
                       }
                        ?>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                
                </div>
                <ul></ul>
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

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /* Global settings */
 
.product-image {
  float: left;
  width: 20%;
}
 
.product-details {
  float: left;
  width: 37%;
}
 
.product-price {
  float: left;
  width: 12%;
}
 
.product-quantity {
  float: left;
  width: 10%;
}
 
.product-removal {
  float: left;
  width: 9%;
}
 
.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}
 
/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}
 
.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}
 
.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}
 
/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}
 
/* Body/Header stuff */

 
h1 {
  font-weight: 100;
}
 
label {
  color: #aaa;
}
 
.shopping-cart {
  margin-top: -45px;
}
 
/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}
 
/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}
 
/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
 
.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}
 
.checkout:hover {
  background-color: #494;
}
 
/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }
 
  .column-labels {
    display: none;
  }
 
  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }
 
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
 
  .product-price {
    clear: both;
    width: 70px;
  }
 
  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }
 
  .product-quantity:before {
    content: 'x';
  }
 
  .product-removal {
    width: auto;
  }
 
  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }
 
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
 
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
 
  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}    </style>
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
</head>
<body>
    <h1>Carrito</h1>
 
<div class="shopping-cart">
 
  <div class="column-labels">
    <label class="product-image">Imagen</label>
    <label class="product-details">Producto</label>
    <label class="product-price">Precio</label>
    <label class="product-quantity">Cantidad</label>
    <label class="product-removal">Eliminar</label>
    <label class="product-line-price">Total</label>
    
  </div>
 <?php 

$suma = 0;

 $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        //echo "Opppss, el servidor esta en mantenimiento";
        exit();
    }if(!empty($_GET["idpro"])){
        $mysqli->query("delete from carrito where idpro1 = '".$_GET["idpro"]."' and idusu1 = '".$_SESSION["id"]."'");
    }
     /* if(!empty($_GET["idcar1"])){
        $mysqli->real_query("SELECT * FROM carrito where idcar = '".$_GET["idcar1"]."'");
                         $resultado = $mysqli->use_result();

                         while ($fila = $resultado->fetch_assoc()) {
                           $procar = $fila['idpro'];
                         }
        $usucar = $_SESSION["id"];
        $mysqli->query("insert into carrito values(null,'$procar','$usucar')");
    } */



$usucar1 = $_SESSION["id"];
 
    $resultado = $mysqli->query("SELECT * FROM carrito WHERE idusu1 = '$usucar1' ORDER BY idcar");


    while($fila = $resultado->fetch_assoc()){
  ?>
<form method="POST" action="pagar.php">
  <div class="product">
    <div class="product-image">
      <?php 

      $idcar1 = $fila['idpro1'];

      $mysqli->real_query("SELECT * FROM producto where idpro = '$idcar1'");
                         $resultado1 = $mysqli->use_result();

                         while ($fila1 = $resultado1->fetch_assoc()) {
                            if ($fila1['imagenes'] == "") {
                               echo '<img class="card-img-top" src="img/defecto.jpg" alt="Card image cap">';
                            }else{
                                echo '<img class="card-img-top" src="'.$fila1['imagenes'].'" alt="Card image cap" >';
                            }
                        

                        
                        ?>
    </div>

    <div class="product-details">
      <div class="product-title">
<?php              
      echo "<p>".$fila1['nombrePro']."</p>";
               
                         ?>
      </div>
      <?php              
      echo "<p class='product-description'>".$fila1['despro']."</p>";
               
                         ?>
    </div>
    <div class="product-price">
        <?php              
      echo "<p>".$fila1['vlrpro']."</p>";
  
               
                         ?>
    </div>
    <div class="product-quantity">
      <input type="number" value="1" min="1" name="cantidad">
    </div>
    <div class="product-removal">
      <button class="remove-product">
      	<?php  
      	echo "<a width='40' href='carrito.php?idpro=" . $fila1['idpro'] ."'><img src='img/eliminar.png' width='30' height='30' title='eliminar producto'></a>";   
      	?>
      </button>
    </div>
    <div class="product-line-price" style="">
    	<?php         
    		echo "<p>".$fila1['vlrpro']."</p>";
    		$suma += ($fila1['vlrpro']);

    }     

    


        ?>
    </div>
  </div>
 
  <?php 
}
   ?>
 
  <div class="totals">
    <div class="totals-item">
      <label>Envío</label>
      <div class="totals-value" id="cart-shipping" style="">35000</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>TOTAL</label>
      <div class="totals-value" id="cart-total" style=""><?php            

    		echo "<p>".($suma + 35000)."</p>";
    		
        ?></div>
    </div>
  </div>
       
      <input type="submit" class="checkout" value="Ir a métodos de pago">
</form>
</div>  <script type="text/javascript">
    
$(document).ready(function() {
 
/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 35000; 
var fadeTime = 300;
 
 
/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});
 
$('.product-removal button').click( function() {
  removeItem(this);
});
 
 
/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
   
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
   
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
   
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}
 
 
/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
   
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}
 
 
/* Remove item from cart */
//function removeItem(removeButton)
//{
  /* Remove row from DOM and recalc cart total */
//  var productRow = $(removeButton).parent().parent();
//  productRow.slideUp(fadeTime, function() {
//    productRow.remove();
//    recalculateCart();
//  });

//}
 
});
 
    </script>


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

?>


 