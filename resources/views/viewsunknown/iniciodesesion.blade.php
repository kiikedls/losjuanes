<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name="viewport", content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible", content="ie-edge">
    <title>Iniciar sesion - Spotify</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons", rel="stylesheet">
    <link rel="shortcut icon", href="img/SpotifyN.ico">
    <link rel="stylesheet", href="css/materialize.css">
    <link rel="stylesheet", type="text/css", href="js/materialize.js">
    <link rel="stylesheet", type="text/css", href="css/animate.css">
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="css/iniciarsesion.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap", rel="stylesheet">
</head>
<body>
    <nav id='navegador'>
        <div class='nav-wrapper'>
            <a href='#' class='brand-logo center'><img id='Logo' src='img/Logonavbar.PNG' alt='LogoSpotify'></a>
        </div>
    </nav>

    @if(Session::has('Error'))                                 
        <div>
            <strong>{{Session::get("Error")}}</strong>  
        </div>
    @endif
    <div class="row">
        <div class="col s12 center">
            <p class="center"> Para continuar, inicia sesión en Spotify</p>
        </div>
        <br>

        <form action="iniciodesesion_submit" method="get" accept-charset="utf-8">
            <div class='col s12 center'>
                <button class='btn regbtn' type='submit' name='loginfacebook'>INICIAR CON FACEBOOK</button>
            </div>
        </form>
        <div class="col s12 center">
            <img src='img/barraconlao.PNG' alt="barra">
        </dv>
        <form action="{{ url("/login") }}" method="POST" accept-charset="utf-8">
            {{ csrf_field() }}
            <div class="col s12">
                <input class='col s4 offset-s4 forminputs grey-text' type='text' name='userinput' placeholder='Correo electronico o nombre de usuario'>
            </div>
            <div class="col s12">
                <input class='col s4 offset-s4 forminputs grey-text' type='password' name='paswordninput' placeholder='Contrasena'>
            </div>
            <div class="col s12">
                <p>
                    <label>
                        <input type="checkbox" name="terms" value="terms" >
                        <span class="col s2 offset-s4 grey-text"> <span id="rememberme">Recordarme</span></span>
                    </label>
                </p>
                <button class='btn iniciarsesbtn green col s3' type='submit' name='loginfacebook' text='Inicia sesion con spotify'>
                    <p id="psafb">Iniciar</p> 
                    <p>Sesion</p>
                </button>
            </div>
        </form>
        <div class="col s12">
            <p class="center">
                <a class='green-text' href="#">¿Has olvidado tu contraseña?</a>
            </p>
        </div>
        <div class="col s12 center">
            <img src='img/barraconlao.PNG' alt="barra">
        </dv>
        <div class="col s12 center">
            <p class="center">¿No tienes cuenta?</p>
        </div>
        <form action="{{ url("/registrarce") }}" method="get" accept-charset="utf-8">
            <div class='col s12 center'>
                <button class='btn spotbtn' type='submit' name='loginfacebook'>REGISTRATE EN SPOTIFY</button>
            </div>
        </form>
        <div class="col s12">
            <span class="center grey-text" id="span-foter">Si haces clic en "Acceder con Facebook" y no eres usuario de Spotify, quedaras</span>
            <br>
            <span class="center grey-text" id="span-foter">registrado y aceptaras los <a class="green-text" href="#"> Terminos y Condiciones </a>y la <a class="greeen-text" href="#">Politica de Privacidad</a> de Spotify</span>
        </div>
    </div>
</body>
</html>


