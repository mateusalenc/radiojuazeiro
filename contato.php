<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="http://www.radiojuazeiro.com.br/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style-contato.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>

	<!--SEO-->
	<meta name="autor" content="Mateus, Evandro, Rafael" />
	<meta name="description" content="A Rádio Juazeiro está localizada em Juazeiro" />
	<meta name="keywords" content="Rádio, Notícias, Juazeiro"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#ajax_form').submit(function(){
				var dados = jQuery( this ).serialize();

				jQuery.ajax({
					type: "POST",
					url: "processa.php",
					data: dados,
					success: function( data )
					{
						alert( data );
					}
				});

				return false;
			});
		});
	</script>
</head>
<!--NAV BAR-->
<body>
	<?php
	include('include/header.php');
	?>
	<!---->
	<div class="container">
		<div class="line-titulo" style="margin-top: 130px; margin-bottom: 50px;">
			<div class="ln1"></div>
			<h2 class="contato">Entre em contato</h2>
		</div>

		<form class="align-center needs-validation" id="ajax_form" data-toggle="validator" role="form" method="post" novalidate>
			<div class="form-group">	    
				<label for="textNome" class="control-label">Nome</label>	    
				<input id="textNome" class="form-control" placeholder="Digite seu Nome..." type="text" name ="nome" required>	  
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="form-group">	    
				<label for="inputEmail" class="control-label">Email</label>	    
				<input id="inputEmail" class="form-control" placeholder="Digite seu E-mail" type="email" name ="email"  required>	
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>    

			</div>

			<div class="form-group">
				<label for="textarea" class="control-label">Mensagem</label>	
				<textarea class="form-control" placeholder="Sua mensagem*" id="textarea" name="mensagem" required ></textarea>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="form-group">	    
				<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>	  
			</div>
		</form>

		<div class="line-titulo" style="margin-top: 50px;">
			<div class="ln1"></div>
			<h2>Venha nos visitar</h2>
		</div><!--line-titulo-->
	</div>
	<script>
		// Disable form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
		    // Get the forms we want to add validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		    	form.addEventListener('submit', function(event) {
		    		if (form.checkValidity() === false) {
		    			event.preventDefault();
		    			event.stopPropagation();
		    		}
		    		form.classList.add('was-validated');
		    	}, false);
		    });
		}, false);
		})();
</script>

<div class="visita">
	<div class="container">
		<div class="float-left info">
			<h2>Rádio Juazeiro LTDA</h2>
			<h2>Venha nos visitar</h2>
			<p>Rua Aprigio Duarte, nº 05, Centro,<br>
			Juazeiro, BA CEP: 48903-410</p>
			<p>Comercial: (074) 3613-7211<br>
				Participação (074) 3611-3884 / 3611-8539<br>
			Email: contato@radiojuazeiro.com.br</p>
		</div>

		<div class="container-fluid">
			<div class="map-responsive text-right">
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" 
				width="550" height="500" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</div>
	<hr class="featurette-divider">
</div>

<!--footer-->


<?php
include('include/footer.php');
?>

<!--footer-->
</main>

<script src="js/functions.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
</body>
</html>