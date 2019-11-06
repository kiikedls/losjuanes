<!DOCTYPE html>
<html lang="es-MX">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="https://open.scdn.co/static/images/favicon.png">
	<title>Spotify - Inicio</title>

	<link rel="stylesheet" href="/css/interfaz.css">
	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
	<script src="/js/jquery-3.4.1.js"></script>
	<script src="/js/materialize.min.js"></script>
</head>

<body>
	<div class="main-container">
		<ul id="main-nav" class="sidenav sidenav-fixed black">
			<li class="logo">
				<a id="logo-container" href="/" class="brand-logo">
					<object id="front-page-logo" type="image/png" data="/img/brand.png" height="40">Spotify</object>
				</a>
			</li>
			<li class="menu">
				<a href="#" class="selected"><i class="fas fa-home"></i><b>Inicio</b></a>
				<a href="#"><i class="fas fa-search"></i><b>Buscar</b></a>
				<a href="#"><i class="fas fa-book-open"></i><b>Tu biblioteca</b></a>
			</li>
			<li class="menu-bottom">
				<a class="waves-effect waves-light btn-small btn-menu white black-text" style="margin-bottom: 8px;"><b>Registrarte</b></a>
				<a class="waves-effect waves-light btn-small btn-menu btn-menu-dark"><b>Iniciar sesión</b></a>
				<a href="#" class="center-align priv-info" style="margin-bottom: 4px;">Cookies</a>
				<hr class="center-align" style="width: 10px;">
				<a href="#" class="center-align priv-info" style="margin-top: -14px;">Privacidad</a>
			</li>
		</ul>
		<main class="content">
			<div class="container">
				<div class="row center-align categories">
					<div class="col s2"><a href="#" class="selected">SELECCIONADOS</a></div>
					<div class="col s2"><a href="#">PODCASTS</a></div>
					<div class="col s4"><a href="#">GÉNEROS Y ESTADOS DE ÁNIMO</a></div>
					<div class="col s2"><a href="#">NOVEDADES</a></div>
					<div class="col s2"><a href="#">DESCUBRIR</a></div>
				</div>
			</div>
		</main>
	</div>

	<footer class="page-footer">

	</footer>
</body>

</html>
