<html lang="pt-BR">
<head>

	<title>Rádio Juazeiro</title>

	<!--Links-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcut icon" href="http://www.radiojuazeiro.com.br/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style-contato.css">
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

		<section class="form">
			<div class="container">
				<form class="align-center needs-validation" id="ajax_form" data-toggle="validator" role="form" method="post" novalidate>
					<fieldset>
						<legend>			
							<div class="line-titulo entre_contato">
								<h1 class="contato" alt="Nos envie um e-mail">Entre em contato</h1>
							</div><!--line-titulo-->
						</legend><!--legend-->
						<div class="form-group">	    
							<label for="textNome" class="control-label" >Nome</label>	    
							<input id="textNome" class="form-control shadow-none" placeholder="Digite seu Nome..." type="text" name ="nome" alt="Digite seu nome aqui" required>	  
							<div class="valid-feedback">Muito bom.</div><!--valid-feedback-->
							<div class="invalid-feedback">Campo inválido</div><!--invalid-feedback-->
						</div><!--form-group-->

						<div class="form-group">	    
							<label for="inputEmail" class="control-label">Email</label>	    
							<input id="inputEmail" class="form-control shadow-none" placeholder="Digite seu E-mail" type="email" name ="email" alt="Digite seu e-mail aqui" required>	
							<div class="valid-feedback">Muito bom.</div><!--valid-feedback-->
							<div class="invalid-feedback">Campo inválido</div><!--invalid-feedback--> 
						</div><!--form-group-->

						<div class="form-group">
							<label for="textarea" class="control-label">Mensagem</label>	
							<textarea class="form-control shadow-none" placeholder="Sua mensagem*" id="textarea" name="mensagem" alt="Digite sua mensagem aqui" required ></textarea>
							<div class="valid-feedback">Muito bom.</div><!--valid-feedback-->
							<div class="invalid-feedback">Campo inválido</div><!--invalid-feedback-->
						</div><!--form-group-->

						<div class="form-group">	    
							<button type="submit" class="btn btn-primary shadow-none" name="enviar" alt="Botão enviar mensagem">Enviar</button>	  
						</div><!--form-group-->
					</fieldset><!--fieldset-->
				</form><!--form-->

				<div class="line-titulo venha_visitar">
					<div class="ln1"></div>
					<h2 id="venha_visitar"alt="Venha nos visitar">Venha nos visitar</h2>
				</div><!--line-titulo-->
			</div><!--container-->
		</section><!--form-->

		<section class="visita">
			<div class="visita">
				<div class="container">
					<div class="float-left info" alt="Rádio Juazeiro LTDA, Venha nos visitar, Rua Aprigio Duarte, nº 05, Centro, Juazeiro, BA CEP: 48903-41, Telefone: (074) 3613-7211, Email: contato@radiojuazeiro.com.br">
						<h2>Rádio Juazeiro LTDA</h2>
						<h2>Venha nos visitar</h2>
						<p>Rua Aprigio Duarte, nº 05, Centro,<br>
						Juazeiro, BA CEP: 48903-410</p>
						<p>Comercial: (074) 3613-7211<br>
							Participação (074) 3611-3884 / 3611-8539<br>
						Email: contato@radiojuazeiro.com.br</p>
					</div><!--float-left info-->

					<div class="container-fluid">
						<div id="map-container-google-1" class="z-depth-1-half map-container">
							<iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
							allowfullscreen></iframe>
						</div><!--z-depth-1-half map-container-->
					</div><!--container-fluid-->
					<div class="clear"></div><!--clear-->
				</div><!--container-->
				<hr class="featurette-divider"><!--featurette-divider-->
			</div><!--visita-->
		</section><!--visita-->

		<?php
		include('include/footer.php');
		?>

	</main><!--main-->

	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
	<script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script> 
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
	<noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
</body>
</html>