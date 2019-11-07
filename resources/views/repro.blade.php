<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://open.scdn.co/static/images/favicon.png">
    <title>Spotify - Inicio</title>

    <link rel="stylesheet" href="/css/interfaz.css">
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/js/materialize.min.js"></script>
    <style>
        #band:hover{
            color: #ffffff !important;
        }
    </style>
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
    <main class="content row">
        <div class="container center-align col s5">
            <div>
                <img src="img/sio.jpg" alt="album" width="250px">
            </div>
            <h4 class="flow-text" style="color: #ffffff;font-family: 'Montserrat', sans-serif;font-size: 28px">
                Cinematics
                <br> (Extended edition)</h4>
            <div>
                <a id="band" href="#" style="color: #b3b3b3;">set it off</a>
            </div>
            <div style="margin-top: 10px;">
                {{--            <a class="waves-effect waves-light btn" href="#">reproducir</a>--}}
                <button type="button" class="btn green btn-flat" style="border-radius: 100px; color: #ffffff;">reproducir</button>
            </div>
            <div>
                <p style="color: #b3b3b3b3;">2012 . 15 canciones</p>
            </div>
            <div>
                <a href="#" style="margin-inline: 20px"><img src="img/corazon.png" alt="" style="width: 20px; height: 20px;"></a>
                <i class="material-icons" style="margin-inline: 20px; color: #b3b3b3; width: 20px;height: 20px;">more_horiz</i>
            </div>
        </div>
        <div class="container col s7">
            <ul class="collection" style="border-width: 0px">
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                    </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                        </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                    </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                    </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                    </li></a>
                <a href="#"><li class="collection-item row" style="background-color: #181818;color: #fff;">
                    <div class="col s1">
                        <img src="img/nota-musical.png" alt="" style="width: 20px; height: 20px">
                    </div>
                    <div class="col s10 row">
                        <div class="col s12" style="font-weight: bold; font-size: large;font-family: 'Montserrat';">
                            titulo de la cancion
                        </div>
                        <div class="col s12" style="color: grey; font-family: 'Montserrat';">set it off</div>
                    </div>
                    <div class="col s1">3:22</div>
                    </li></a>
            </ul>
        </div>
    </main>
</div>

<footer class="page-footer">
    <audio controls="controls">
        <source src="music/song.mp3" type="audio/mpeg">
        tu navegador no admite este tipo de reproduccion
    </audio>
</footer>
</body>

</html>
