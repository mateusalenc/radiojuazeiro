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
	<link rel="stylesheet" type="text/css" href="css/style-destaques.css">
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
  <header>
    <?php
    include('include/header.php');
    ?>
  </header>
  <main>
    <section class="ancora">
      <div class="atalhos">
        <ul>
          <li><a href="#noticias" accesskey="0">Ir Conteudo[0]</a></li>
        </ul>
      </div>
    </section>

    <section>
      <h1 class="h2" id="noticias" alt="destaques">Destaques</h1>
      <br>


      <div class="album py-5 bg-light container">
        <div class="card-group">
          <div class="card" id="noticia1">
            <img src="images/destaque1.jpg" class="card-img-top" alt="Pombo livra motorista de ser multado">
            <div class="card-body">
              <h2 class="card-title">Pombo livra motorista de ser multado</h2>
              <p class="card-text">Ave passou em frente de radar e impediu que infrator fosse identificado pela polícia. </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card" id="noticia2">
            <img src="images/destaque2.jpg" class="card-img-top" alt="Invasor entra em casa nos EUA">
            <div class="card-body">
              <h2 class="card-title">Invasor entra em casa nos EUA</h2>
              <p class="card-text">Uma pessoa invadiu uma casa na cidade americana de Marlborough, Massachusetts, fez uma faxina completa e foi embora sem levar nada.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 9 mins ago</small>
            </div>
          </div>
          <div class="card" id="noticia3">
            <img src="images/destaque3.jpg" class="card-img-top" alt="Homem é preso após tentar pagar com maconha">
            <div class="card-body">
              <h2 class="card-title">Homem é preso após tentar pagar com maconha</h2>
              <p class="card-text">Um homem de 23 anos foi preso no estado americano da Flórida após tentar pagar por um lanche em um drive-thru da lanchonete McDonald's com um pacote de maconha.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 31 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card-group">
          <div class="card" id="noticia4">
            <img src="images/destaque4.jpg" class="card-img-top" alt="Cães policiais são fantasiado">
            <div class="card-body">
              <h2 class="card-title">Cães policiais são fantasiados</h2>
              <p class="card-text">Em clima da festa de Halloween, o Dia das Bruxas nos países de língua inglesa, a polícia do condado de Cheshire, na Inglaterra, fantasiou os cães policiais Toby e Amos..</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 57 mins ago</small>
            </div>
          </div>
          <div class="card" id="noticia5">
            <img src="images/destaque5.jpg" class="card-img-top" alt="Motorista canadense flagrado a 145 km/h">
            <div class="card-body">
              <h2 class="card-title">Motorista canadense flagrado a 145 km/h</h2>
              <p class="card-text">Um motorista canadense flagrado dirigindo a 145 km/h deu à polícia a desculpa de que estava ouvindo o rock "Kickstart my Heart", da banda americana Mötley Crüe -que fala justamente sobre carros velozes.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 1 hour ago</small>
            </div>
          </div>
          <div class="card" id="noticia6">
            <img src="images/destaque6.jpg" class="card-img-top" alt="Polícia dos EUA procura voluntários para ficarem bêbados">
            <div class="card-body">
              <h2 class="card-title">Polícia dos EUA procura voluntários para ficarem bêbados </h2>
              <p class="card-text">Um departamento de polícia nos EUA está à procura de três voluntários que se disponham a ficar embriagados para um treinamento.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 2 days ago</small>
            </div>
          </div>
        </div>
      </div>
      <hr class="featurette-divider">
    </section>
  </main>


  <!--footer-->
  <footer>  <?php
  include('include/footer.php');
  ?>
</footer>

<!--footer-->

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/functions.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<noscript>Seu navegador não tem suporte a JavaScript ou está desativado!</noscript>
</body>
</html>	