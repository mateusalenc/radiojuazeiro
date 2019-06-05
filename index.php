<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<title>Rádio Juazeiro</title>

	<!--Links-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcut icon" href="http://www.radiojuazeiro.com.br/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--SEO-->
	<meta name="description" content="A Rádio Juazeiro está localizada em Juazeiro" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Rádio, Notícias, Juazeiro"/>
	<meta name="autor" content="Mateus, Evandro, Rafael" />
	<meta charset="utf-8">
</head>
<body>
	<main class="main">

		<?php
		include('include/header.php');
		?>

		<section class="slide">
			<div id="myCarousel" class="carousel" data-ride="carousel" >
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
								<h1 class="h1">Raça negra</h1>
								<p>Raça Negra não é pagode, mas samba romântico, diz vocalista</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Mais detalhes</a></p>
							</div><!--carousel-caption-->
						</div><!--container-->
					</div><!--carousel-item-->

					<div class="carousel-item carousel2">
						<img class="bd-placeholder-img" src="images/gustavo.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption text-left">
								<h2 class="h1">Gusttavo Lima</h2>
								<p>Gusttavo Lima não aparece em gravação de reality comandado por Luan Santana</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Mais detalhes</a></p>
							</div><!--carousel-caption-->
						</div><!--container-->
					</div><!--carousel-item-->

					<div class="carousel-item carousel3">
						<img class="bd-placeholder-img" src="images/wesley2.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption text-left">
								<h2 class="h1">Wesley safadão</h2>
								<p>Wesley Safadão assusta internautas ao surgir sem dentes no Instagram</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Mais detalhes</a></p>
							</div><!--carousel-caption-->
						</div><!--container-->
					</div><!--carousel-item-->
				</div><!--carousel-inner-->

				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!--carousel-->
		</section><!--slide-->

		<section class="locutores">
			<div class="container marketing">
				<div class="h1 text-center" id="locutor">Locutores</div><!--h1 text-center-->
				<!-- Three columns of text below the carousel -->
				<div class="row">

					<div class="col-lg-4 img" id="locutores">
						<img class="d-block w-100 bd-placeholder-img rounded-circle mx-auto" src="images/wendell.jpg" alt="Wendell Bezerra">
						<h2>Wendell Bezerra</h2>
						<p>Wendel Luís Bezerra da Silva é um ator, dublador, diretor de dublagem, locutor e youtuber brasileiro, na área desde os oito anos de idade. Também dirige a dublagem de séries e filmes. Tem quatro irmãos, dos quais dois também seguem a carreira de dublador, Ulisses e Úrsula Bezerra.</p>
						<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
					</div><!--col-lg-4 -->

					<div class="col-lg-4 img">
						<img class="d-block w-100 bd-placeholder-img rounded-circle mx-auto" src="images/marcio.jpg" style="border-radius: 200px;" alt="Marcio Seixas">
						<h2>Marcio Seixas</h2>
						<p>Márcio Roberto Seixas é um ator, ex-dublador, locutor e radialista brasileiro. Durante mais de duas décadas foi o anunciante dos episódios das séries dubladas na Herbert Richers e locutor oficial do estúdio no Rio de Janeiro.</p>
						<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
					</div><!--col-lg-4 -->

					<div class="col-lg-4 img">
						<img class="d-block bd-placeholder-img w-100 rounded-circle mx-auto" src="images/marco.jpg" style="border-radius: 200px;" alt="Marco Ribeiro"> 
						<h2>Marco Ribeiro</h2>
						<p>Marco Antônio Ribeiro da Silva (Rio de Janeiro, 22 de agosto de 1970) é um ator, dublador, diretor de dublagem, locutor, radialista, empresário, líder presidente da Igreja evangélica Assembléia de Deus Ministério Kairos do Rio de Janeiro e pastor evangélico brasileiro.</p>
						<p><a class="btn btn-secondary" href="#" role="button">Mais detalhes &raquo;</a></p>
					</div><!--col-lg-4 -->

				</div><!--row -->

			</div><!--container marketing-->

		</section><!--locutores-->

		<hr class="featurette-divider"><!--featurette-divider-->

		<?php
		include('include/footer.php');
		?>

	</main><!--main-->


	<!--Scripts-->
	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnv7y3NuVB3H7-6XXXbtFUYOsvWql_d-8&"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<noscript>Seu navegador não tem suporte para javascript</noscript>

</body>
</html>	