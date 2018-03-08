<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Loja Virtual - Candeias Fashion - Lailson Conceição</title>
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,,800,900|Josefin+Sans:300,400,600,700" rel="stylesheet"> 
	<!-- CSS STYLES -->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/carrinho.css">
	<link rel="stylesheet" type="text/css" href="css/detalhes.css">
	<link rel="stylesheet" type="text/css" href="css/fitness.css">
	<link rel="stylesheet" type="text/css" href="css/intima.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
</head>
<body>

	<header class="header-nav">
		<nav class="nav-menu">
			<div class="nav-logo">
				<a href="/">CandeiasFashion</a>
			</div>
			<ul class="nav-item">
				<li><a href="/moda-intima">Moda Íntima</a></li>
				<li><a href="/moda-fitness">Moda Fitness</a></li>
				<li><a href="/cadastro">Registrar-se</a></li>
				<li><a href="/login">Login</a></li>
			</ul>
		</nav>		
	</header>

	<div class="wrapper">
		<?php require $layout->load(); ?>		
	</div>

	<footer class="footer">
		<div class="footer-pages">
			<div class="institutional">
				<h5>Páginas</h5>
				<ul>
					<li>&rang;&rang; Sobre Nós</li>
					<li>&rang;&rang; Política de Troca</li>
					<li>&rang;&rang; Ajuda</li>
					<li>&rang;&rang; Contato</li>				
				</ul>
			</div>
			<div class="payment">
				<h5>Como pagar?</h5>
				<ul>
					<li>&rang;&rang; Depósito em Conta</li>
					<li>&rang;&rang; PagSeguro</li>
					<li>&rang;&rang; Pagamento na Entrega</li>
				</ul>
			</div>
			<div class="media-social">
				<h5>Onde nos encontrar</h5>
				<ul>
					<li>&rang;&rang; <a href="https://www.facebook.com/lailsoncv" target="_blank">Facebook</a></li>
					<li>&rang;&rang; <a href="https://github.com/lailsoncv" target="_blank">GitHub</a></li>
				</ul>
			</div>
			<div class="newsletter">
				<h5>Assine para receber novidades e promoções</h5>				
				<form>
					<input type="email" name="input-newsletter" placeholder="Assine nosso newsletter">
					<input type="submit" class="btn btn-newsletter" value="OK">
				</form>
			</div>
		</div>
		<p>&copy; Todos os direitos reservados - 2018</p>
	</footer>
	
</body>
</html>