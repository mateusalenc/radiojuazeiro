<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<title>Rádio Juazeiro</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="http://www.radiojuazeiro.com.br/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--SEO-->
	<meta name="autor" content="Mateus, Evandro, Rafael" />
	<meta name="description" content="A Rádio Juazeiro está localizada em Juazeiro" />
	<meta name="keywords" content="Rádio, Notícias, Juazeiro"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>
<body>
	<main>

		<?php
		include('include/header.php');
		?>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">	
					<img class="bd-placeholder-img" src="images/Raça.jpg" alt="First slide" style="background-position: center;">
					<div class="container">
						<div class="carousel-caption ">
							<h1>Raça negra</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item carousel2">
					<img class="bd-placeholder-img" src="images/gustavo.jpg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption text-left">
							<h1>Gusttavo Lima</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Mais detalhes</a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item carousel3">
					<img class="bd-placeholder-img" src="images/wesley2.jpg" alt="Third slide">
					<div class="container">
						<div class="carousel-caption text-left">
							<h1>Wesley safadão</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Mais detalhes</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	  	<!-- Marketing messaging and featurettes
	  		================================================== -->

	  		<div class="container marketing">

	  			<!-- Three columns of text below the carousel -->
	  			<div class="row locutores">
	  				<div class="col-lg-4 img" id="locutores">
	  					<img class="d-block w-100 bd-placeholder-img rounded-circle" src="images/wendell.jpg" alt="Wendell Bezerra">
	  					<h2>Wendell Bezerra</h2>
	  					<p>Wendel Luís Bezerra da Silva é um ator, dublador, diretor de dublagem, locutor e youtuber brasileiro, na área desde os oito anos de idade. Também dirige a dublagem de séries e filmes. Tem quatro irmãos, dos quais dois também seguem a carreira de dublador, Ulisses e Úrsula Bezerra.</p>
	  					<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
	  				</div><!-- /.col-lg-4 -->
	  				<div class="col-lg-4 img">
	  					<img class="d-block w-100 bd-placeholder-img rounded-circle" src="images/marcio.jpg" style="border-radius: 200px;" alt="Marcio Seixas">
	  					<h2>Marcio Seixas</h2>
	  					<p>Márcio Roberto Seixas é um ator, ex-dublador, locutor e radialista brasileiro. Durante mais de duas décadas foi o anunciante dos episódios das séries dubladas na Herbert Richers e locutor oficial do estúdio no Rio de Janeiro.</p>
	  					<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
	  				</div><!-- /.col-lg-4 -->
	  				<div class="col-lg-4 img">
	  					<img class="d-block w-100 bd-placeholder-img rounded-circle" src="images/marco.jpg" style="border-radius: 200px;" alt="Marco Ribeiro"> 
	  					<h2>Marco Ribeiro</h2>
	  					<p>Marco Antônio Ribeiro da Silva (Rio de Janeiro, 22 de agosto de 1970) é um ator, dublador, diretor de dublagem, locutor, radialista, empresário, líder presidente da Igreja evangélica Assembléia de Deus Ministério Kairos do Rio de Janeiro e pastor evangélico brasileiro.</p>
	  					<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
	  				</div><!-- /.col-lg-4 -->
	  			</div><!-- /.row -->

	  			<hr class="featurette-divider">

	  		</div><!-- /.container -->

	  		<!--footer-->
	  		<?php
	  		include('include/footer.php');
	  		?>

	  		<!--footer-->
	  	</main>



	  	<script type="text/javascript" src="js/jquery.js"></script>
	  	<script src="js/functions.js"></script>
	  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnv7y3NuVB3H7-6XXXbtFUYOsvWql_d-8&"></script>
	  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  	<noscript>Seu navegador não tem suporte para javascript</noscript>
	  </body>
	  </html>	