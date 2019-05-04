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

	<!--SEO-->
	<meta name="autor" content="Mateus, Evandro, Rafael" />
	<meta name="description" content="A Rádio Juazeiro está localizada em Juazeiro" />
	<meta name="keywords" content="Rádio, Notícias, Juazeiro"/>
</head>
<body>
	<?php
		include('include/header.php');
	?>

	<div class="container" >
		<div class="line-titulo" style="margin-top: 130px; margin-bottom: 50px;">
			<div class="ln1"></div>
			<h2 class="contato">Entre em contato</h2>
		</div>
		<form class="align-center">
			<div class="form-group">
				<div class="">
					<input type="text" class="form-control" placeholder="Nome*">
				</div>
			</div>
			<div class="form-group">
				<div class="">
					<input type="email" class="form-control" placeholder="Email*">
				</div>
			</div>
			<div class="form-group">
				<div class="">
					<input type="email" class="form-control" placeholder="Telefone*">
				</div>
			</div>
			<div class="form-group">
				<div class="">
					<textarea class="form-control" placeholder="Sua mensagem*"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="">
					<input type="submit" name="acao" class="btn btn-primary" value="Enviar">
				</div>
			</div>
		</form>

		<div class="line-titulo" style="margin-top: 50px;">
			<div class="ln1"></div>
			<h2>Venha nos visitar</h2>
		</div><!--line-titulo-->
	</div>

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
	</div>

	<?php
	include('include/footer.php');
	?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/functions.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>