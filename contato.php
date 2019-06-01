<html lang="pt-BR">
<head>

	<title>Rádio Juazeiro</title>

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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

</head>
<body>
	<main>
		<?php
		include('include/header.php');
		?>
		<section>
			<div class="atalhos">
				<ul>
					<li><a href="#ajax_form" accesskey="1">Ir Conteudo[1]</a></li>
					<li><a href="#venha_visitar" accesskey="2">Ir para menu nosso endereço[2]</a></li>
				</ul>
			</div>
		</section>
		<!---->
		<section>
			<div class="container">


				<form class="align-center needs-validation" id="ajax_form" data-toggle="validator" role="form" method="post" novalidate>
					<fieldset>
						<legend>			
							<div class="line-titulo entre_contato">
								<h1 class="contato" alt="Nos envie um e-mail">Entre em contato</h1>
							</div>
						</legend>	
						<div class="form-group">	    
							<label for="textNome" class="control-label" >Nome</label>	    
							<input id="textNome" class="form-control shadow-none" placeholder="Digite seu Nome..." type="text" name ="nome" alt="Digite seu nome aqui" required>	  
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="form-group">	    
							<label for="inputEmail" class="control-label">Email</label>	    
							<input id="inputEmail" class="form-control shadow-none" placeholder="Digite seu E-mail" type="email" name ="email" alt="Digite seu e-mail aqui" required>	
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>    

						</div>

						<div class="form-group">
							<label for="textarea" class="control-label">Mensagem</label>	
							<textarea class="form-control shadow-none" placeholder="Sua mensagem*" id="textarea" name="mensagem" alt="Digite sua mensagem aqui" required ></textarea>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="form-group">	    
							<button type="submit" class="btn btn-primary shadow-none" name="enviar" alt="Botão enviar mensagem">Enviar</button>	  
						</div>
					</fieldset>
				</form>

				<div class="line-titulo venha_visitar">
					<div class="ln1"></div>
					<h2 id="venha_visitar"alt="Venha nos visitar">Venha nos visitar</h2>
				</div><!--line-titulo-->
			</div>
		</section>

		<section>
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
					</div>

					<div class="container-fluid">
						<div id="map-container-google-1" class="z-depth-1-half map-container">
							<iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
							allowfullscreen></iframe>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<hr class="featurette-divider">
			</div>
		</section>
		<!--footer-->


		<?php
		include('include/footer.php');
		?>

		<!--footer-->
	</main>

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