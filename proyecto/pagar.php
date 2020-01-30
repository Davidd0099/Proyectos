<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Payment form, credit card form block bootstrap4  - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
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
</head>
<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  

<hr>

<div class="row">
	<aside class="col-sm-6">


 <!-- card.// -->


	</aside> <!-- col.// -->
	<aside class="col-sm-9"  >
<H1  style="text-align:center">METODO DE PAGO XD</H1>

<article class="card">
<div class="card-body p-10">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active show" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> TARGETA DE CREDITO</a></li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
		<i class="fab fa-paypal"></i>PAYPAL</a></li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
		<i class="fa fa-university"></i> TRANSFERENCIA DE BANCO</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade active show" id="nav-tab-card">
	

	<form role="form">
	<div class="form-group">
		<label for="username">TITULAR DE LA TARGETA(nombre)</label>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- form-group.// -->

	<div class="form-group">
		<label for="cardNumber">NUMERO DE  LA TARGETA</label>
		<div class="input-group">
			<input type="number" class="form-control" name="cardNumber" min="4000000000000000" max="60000000000000000" placeholder="" require>
			<div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i><?php echo "<br>";?><i class="fab fa-cc-amex"></i> <?php echo "<br>"; ?>
					<i class="fab fa-cc-mastercard"><?php echo "<br>";?></i> 
				</span>
			</div>
		</div>
	</div> <!-- form-group.// -->

	<div class="row">
	    <div class="col-sm-8">
	        <div class="form-group">
	            <label><span class="hidden-xs">EXPEDICION</span> </label>
	        	<div class="input-group">
	        		<input type="number" class="form-control"min="0" max="99" placeholder="MM" name=""required >
		            <input type="number" class="form-control" min="0" max="99" placeholder="AA" name=""required >
	        	</div>
	        </div>
	    </div>
	    <div class="col-sm-4">
	        <div class="form-group">
	            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
	            <input type="number" min="100" max="999" class="form-control" required="">
	        </div> <!-- form-group.// -->
	    </div>
	</div> <!-- row.// -->
    </form>
    <form method="POST" action="factura.php" >
	<input class="subscribe btn btn-primary btn-block" type="submit" value="CONFIRMAR" >
    </form>
	
</div> <!-- tab-pane.// -->
<div class="tab-pane fade" id="nav-tab-paypal">
<p>PAYPAL ES LA MANERA MAS FACIL DE PAGAR ONLINE</p>
<p>
<form method="get" action="https://www.sandbox.paypal.com/webapps/hermes?token=22U95659M0360170S&useraction=commit&mfid=1569274363765_b4fec7339e442">
<button type="submit" class="btn btn-primary"  > <i class="fab fa-paypal"></i> LOGEATE EN PAYPAL </button>
</p>
</form>
<p><strong>Nota:</strong>  Registrar los datos correctamente para no inconvenientes</p>
</div>
<div class="tab-pane fade" id="nav-tab-bank">
<p>Cuenta De Banco</p>
<dl class="param">
  <dt>BANCO: </dt>
  <dd> MUNDO MINECRAFT</dd>
</dl>
<dl class="param">
  <dt>NUMERO DE CUENTA: </dt>
  <dd> 12345678912345</dd>
</dl>
<dl class="param">
  <dt>NUMERO DE REFERENCIA: </dt>
  <dd> 123456789</dd>
</dl>
<p><strong>Nota:</strong> Verifique que los datos sean correctos como se muestra en pantalla. </p>
</div> <!-- tab-pane.// -->
</div> <!-- tab-content .// -->

</div> <!-- card-body.// -->
</article> <!-- card.// -->


	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br>





<br><br>
	<script type="text/javascript">
		</script>
        </center>


</body></html>