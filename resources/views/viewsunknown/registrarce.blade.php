<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='description' content=''>
	<meta name="viewport", content="width-device-width, initial-scale-1.0">
	<meta http-equiv="X-UA-Compatible", content="ie-edge">
	<title>Registrarce - Spotify</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons", rel="stylesheet">
	<link rel="shortcut icon", href="img/SpotifyN.ico">
	<link rel="stylesheet", href="css/materialize.css">
	<link rel="stylesheet", type="text/css", href="js/materialize.js">
	<link rel="stylesheet", type="text/css", href="css/animate.css">
	<script src="js/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/registrarce.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap", rel="stylesheet">


</head>
<body>
	<nav id='navegador'>
		<div class='nav-wrapper'>
			<a href='#' class='brand-logo center'><img id='Logo' src='img/Logonavbar.PNG' alt='LogoSpotify'></a>
		</div>
	</nav>
	<div class='row'>
		<div class='col s12 center'>
			<button class='btn fbbtn' type='submit' name='loginfacebook' text='Inicia sesion con spotify'>
				<p id="psafb">Registrarte con</p> 
				<p>facebook</p>
			</button>
		</div>
		<div class="col s12 center">
			<img src='img/barraconlao.PNG' alt="barra">
		</dv>

		<form action="/register" method="POST" accept-charset="utf-8">
			{{ csrf_field() }}
			<div class="col s12">
				<p class="center">
					Regístrate con tu dirección de email
				</p>
			</div>
			<div class="col s12">
				<input class='col s4 offset-s4 forminputs grey-text' type='email' name='email' placeholder='Email'>
			</div>
			<div class="col s12">
				<input class='col s4 offset-s4 forminputs grey-text' type='email' name='emailconfirmation' placeholder='Confirmar Email'>
			</div>
			<div class="col s12">
				<input class='col s4 offset-s4 forminputs grey-text' type='password' name='contrasena' placeholder='Contraseña'>
			</div>
			<div class="col s12">
				<input class='col s4 offset-s4 forminputs grey-text' type='text' name="comotellamas" placeholder='¿Como te llamas?'>
			</div>
			<div class="col s12 center">
				<p class='col s4 offset-s4 pnacimiento grey-text'>
					Fecha de nacimiento
				</p>
			</div>
			<div class="col s12">
				<input class="col s1 forminputs grey-text btssmall formcentrar" type="text" name="dia" value="" placeholder="Dia">
				<select class="browser-default col s2 forminputs grey-text btnbig">
					<option value="0" disabled selected>Mes</option>
					<option value="1">Enero</option>
				  	<option value="2">Febrero</option>
				  	<option value="3">Marzo</option>
				  	<option value="4">Abril</option>
				  	<option value="5">Mayo</option>
				  	<option value="6">Junio</option>
				  	<option value="7">Julio</option>
				  	<option value="8">Agosto</option>
				  	<option value="9">Septiembre</option>
				  	<option value="10">Octubre</option>
				  	<option value="11">Noviembre</option>
				  	<option value="12">Diciembre</option>
				</select>


				<input class="col s1 forminputs grey-text btssmall" type="text" name="año" value="" placeholder="Año">
			</div>
			<div class="col s12 center radios">
				<label class="col s1 offset-s4">
					<input class="with-gap" type="radio" name="genero" value="1">
					<span>Hombre</span>
				</label>
				<label class="col s1">
					<input class="with-gap" type="radio" name="genero" value="2">
					<span>Mujer</span>
				</label>
				<label class="col s1" id="radnb">
					<input class="with-gap" type="radio" name="genero" value="0">
					<span >No binario</span>
				</label>	
			</div>
			<div class="col s12">
				<p>
					<label>
						<input type="checkbox" name="terms" value="terms">
						<span class="col s5 offset-s4">Compartir mis datos de registro con los proveedores de contenido de 
						Spotify para fines de marketing.</span>
					</label>
					<br>
					<br>
				</p>
			</div>

			<div class="col s12 center">
				<div class="card col s3 offset-s5 robot">
					<p class="left">
						<label>
							<input type="checkbox" name="terms" value="terms">
							<span >No soy un robot</span>
							</label>
					</p>
					<img class="right" src='img/re-captcha.PNG' alt="barra">
				</div>
			</dv>

			<div class="col s12 center">
				<p class="col s5 offset-s4 pdlf2">Al hacer clic en Registrarce, acepta los <a class="green-text" href="#">Terminos y condiciones de Uso</a> de Spotify</p>
			</div>
			<div class="col s12 center">
				<p class="col s6 offset-s3 pdlf">Para obtener mas informacion sobre como Spotify recopila, utiliza, comparte y protege sus datos personales, lea la 
					<a class="green-text" href="#">Politica de Privacidad</a> de Spotify
				</p>
			</div>
			<div class='col s12 center'>
				<button class='btn regbtn green' type='submit' name='loginfacebook' text='Registrate'>Registrate</button>
			</div>
		</form>
			<div class="col s12 center">
				<span>¿Ya tienes una cuenta?<a class="green-text" href="/iniciarsesion">iniciar sesion</a></span>
			</div>
	</div>

</body>
</html>