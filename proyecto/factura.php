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
  $id = $fila["idusu"];
  $nombre = $fila["nomusu"];
  $apellidos = $fila["apeusu"];
  $sexo = $fila["sexusu"];
  $tipo = $fila["idtide1"];
  $numero_doc = $fila["docusu"];
  $ciudad_nac = $fila["ciunacusu"];
  $fecha_nac = $fila["fecnacusu"];
  $telefono = $fila["telusu"];
  $ciudad_de_res = $fila["ciuresusu"];
  $direccion = $fila["dirusu"];
  $correo = $fila["emausu"];
  $clave = $fila["conusu"];
}

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">

  <title>Simple Invoice - Bootsnipp.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style type="text/css">
    .invoice-title h2,
    .invoice-title h3 {
      display: inline-block;
    }

    .table>tbody>tr>.no-line {
      border-top: none;
    }

    .table>thead>tr>.no-line {
      border-bottom: none;
    }

    .table>tbody>tr>.thick-line {
      border-top: 2px solid;
    }
  </style>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="invoice-title">
          <h2>FACTURA SUPER PRO</h2>
          <h3 class="pull-right">ORDEN # 12345</h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Facturado a:</strong><br>
              BigBang Technology <br>
              1234 Main<br>
              Apt.4B<br>
              Springfield, ST 54321
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Enviado por:</strong><br>
              <?php echo $nombre; ?><br>
              <?php echo $apellidos; ?><br>
              <?php echo $ciudad_nac; ?><br>
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Metodo de pago:</strong><br>
              Mastercard ending **** 4242<br>
              negritoscaliente@gmail.com
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>FECHA DE LA ORDEN:</strong><br>
              Septiembre 24, 2019<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>


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
      .group:before,
      .shopping-cart:before,
      .column-labels:before,
      .product:before,
      .totals-item:before,
      .group:after,
      .shopping-cart:after,
      .column-labels:after,
      .product:after,
      .totals-item:after {
        content: '';
        display: table;
      }

      .group:after,
      .shopping-cart:after,
      .column-labels:after,
      .product:after,
      .totals-item:after {
        clear: both;
      }

      .group,
      .shopping-cart,
      .column-labels,
      .product,
      .totals-item {
        zoom: 1;
      }

      /* Apply clearfix in a few places */
      /* Apply dollar signs */
      .product .product-price:before,
      .product .product-line-price:before,
      .totals-value:before {
        content: '$';
      }

      /* Body/Header stuff */
      body {
        padding: 0px 30px 30px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 100;
      }

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

      .column-labels .product-image,
      .column-labels .product-details,
      .column-labels .product-removal {
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
          color: red;
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

    <h1>SUS COMPRAS
    </h1>
    <form method="post" action="ffacturas.php">
      <button type="submit">GENERAR FACTURA PDF</button>

      <div class="shopping-cart">

        <div class="column-labels">
          <label class="product-image">Image</label>
          <label class="product-details">Product</label>
          <label class="product-price">Price</label>
          <label class="product-line-price">Total</label>
        </div>
        <?php
        $totaltotal = 0;
        $mysqli = new mysqli("localhost", "root", "", "proyecto");
        if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          //echo "Opppss, el servidor esta en mantenimiento";
          exit();
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


        while ($fila = $resultado->fetch_assoc()) {
          ?>

          <div class="product">
            <div class="product-image">
              <?php

                $idcar1 = $fila['idpro1'];

                $mysqli->real_query("SELECT * FROM producto where idpro = '$idcar1'");
                $resultado1 = $mysqli->use_result();

                while ($fila1 = $resultado1->fetch_assoc()) {
                  $total = 0;

                  if ($fila1['imagenes'] == "") {
                    echo '<img class="card-img-top" src="img/defecto.jpg" alt="Card image cap">';
                  } else {
                    echo '<img class="card-img-top" src="' . $fila1['imagenes'] . '" alt="Card image cap" >';
                  }


                  ?>
            </div>

            <div class="product-details">
              <div class="product-title">
                <?php
                    echo "<p>" . $fila1['nombrePro'] . "</p>";

                    ?>
              </div>
              <?php
                  echo "<p class='product-description'>" . $fila1['despro'] . "</p>";

                  ?>
            </div>
            <div class="product-price">
            <?php
                echo "<p>" . $fila1['vlrpro'] . "</p>";
                $total += (($fila1['vlrpro']) + 35000);
                $totaltotal += $total;
              }

              ?>
            </div>

            <div class="product-removal">
            </div>
            <div class="product-line-price" style=""><?php echo $total; ?></div>
          </div>

        <?php
        }
        ?>

        <div class="totals">


          <div class="totals-item">
            <label>COSTO DE ENVIO</label>
            <div class="totals-value" id="cart-shipping" style="">35000</div>
          </div>
          <form action="pagar.php" method="post">
            <div class="totals-item totals-item-total">
              <font color="red"><label>PAGO</label></font>
              <div class="totals-value" id="cart-total" name="cart-total" style=""><?php echo $totaltotal; ?></div>
            </div>
        </div>
        <a class="nav-link" href="perfil.php">Menu principal</a>

      </div>
      <script type="text/javascript">
        $(document).ready(function() {

          /* Set rates + misc */
          var taxRate = 0.05;
          var shippingRate = 15.00;
          var fadeTime = 300;


          /* Assign actions */
          $('.product-quantity input').change(function() {
            updateQuantity(this);
          });

          $('.product-removal button').click(function() {
            removeItem(this);
          });


          /* Recalculate cart */
          function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function() {
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
              if (total == 0) {
                $('.checkout').fadeOut(fadeTime);
              } else {
                $('.checkout').fadeIn(fadeTime);
              }
              $('.totals-value').fadeIn(fadeTime);
            });
          }


          /* Update quantity */
          function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function() {
              $(this).fadeOut(fadeTime, function() {
                $(this).text(linePrice.toFixed(2));
                recalculateCart();
                $(this).fadeIn(fadeTime);
              });
            });
          }


          /* Remove item from cart */
          function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
              productRow.remove();
              recalculateCart();
            });
          }

        });
      </script>