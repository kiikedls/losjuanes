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
    <div class="row">
        <div class="col s3 row">
            <div class="col s3">
                <img id="art" src="" alt="" style="width: 60px; height: 60px;">
            </div>
            <div class="col s6" style="font-family: 'Montserrat', sans-serif">
                <div id="title">titulo de la cancion</div>
                <div id="artist"><stong>set it off</stong></div>
            </div>
        </div>
        <div id="player" class="center-align col s6">
            <div id="controles">
                <a href="#" id="prev" style="color: #b3b3b3"><i class="material-icons">skip_previous</i></a>
                <a href="#" id="play" style="color: #b3b3b3"><i class="material-icons">play_circle_outline</i></a>
                <a href="#" id="next" style="color: #b3b3b3"><i class="material-icons">skip_next</i></a>
                <a href="#" id="rep" style="color: #b3b3b3"><i class="material-icons">repeat</i></a>
                <a href="#" id="shuf" style="color: #b3b3b3"><i class="material-icons">shuffle</i></a>
            </div>
            <div id="playback-bar" class="row">
                <div id="progress-time" class="col s1"></div>
                <div id="progress-bar" class="col s6">
                    <div class="progress" style="background-color: #424242">
                        <div id="progress" class="determinate" style="width: 0%;background-color: darkgray"></div>
                    </div>
                </div>
                <div id="playback-bar" class="col s1">
                </div>
            </div>
        </div>
        <div class="col s3">
            <a href="#"><i class="material-icons">home</i></a>
        </div>
    </div>

{{--    <audio controls="controls">--}}
{{--        <source src="music/song.mp3" type="audio/mpeg">--}}
{{--        tu navegador no admite este tipo de reproduccion--}}
{{--    </audio>--}}

</footer>
</body>
<script type="text/javascript">
    var holding=false;
    var track=document.getElementById('progress-bar');
    var progress=document.getElementById('progress');
    var play=document.getElementById('play');
    var prev=document.getElementById('prev');
    var next=document.getElementById('next');
    var rep=document.getElementById('rep');
    var shuf=document.getElementById('shuf');
    var title=document.getElementById('title');
    var artist=document.getElementById('artist');
    var art=document.getElementById('art');

    var current_track=0;
    var song,audio,duration;
    var playing=false;
    var songs=[{
        title:'Under the knife',
        artist:'Rise against',
        url:'music/song.mp3',
        art:'img/ra.jpg'
    },
        {
            title:'Wherever i go',
            artist:'One republic',
            url:'music/song2.mp3',
            art:'img/or.jpg'
        },
        {
            title:'The haunting',
            artist:'set it off',
            url:'music/song3.mp3',
            art:'img/sio.jpg'
        }];


    window.addEventListener('load',init(),false);

    function init() {
        song=songs[current_track];
        audio=new Audio();
        audio.src=song.url;
        title.textContent=song.title;
        artist.textContent=song.artist;
        art.src=song.art;
    }

    audio.addEventListener('timeupdate',updateTrack,false);
    audio.addEventListener('loadedmetadata',function () {
        duration=this.duration;
    },false);
    window.onmousedown=function (e) {
        e.preventDefault();
        if (holding) seekTrack(e);
    }
    window.onmouseup=function (e) {
        holding=false;
        console.log(holding);
    }
    track.onmousedown=function (e) {
        holding=true;
        seekTrack(e);
        console.log(holding);
    }

    play.onclick=function () {
        playing ? audio.pause():audio.play();
    }
    audio.addEventListener("pause", function () {
        play.innerHTML = '<a href="#" id="play" style="color: #b3b3b3"><i class="material-icons">play_circle_outline</i></a>\n';
        playing = false;
    }, false);

    audio.addEventListener("playing", function () {
        play.innerHTML = '<a href="#" id="play" style="color: #b3b3b3"><i class="material-icons">pause_circle_outline</i></a>\n';
        playing = true;
    }, false);
    next.addEventListener("click", nextTrack, false);
    prev.addEventListener("click", prevTrack, false);

    function updateTrack() {
        curtime = audio.currentTime;
        percent = Math.round((curtime * 100) / duration);
        progress.style.width = percent + '%';
    }

    function seekTrack(e) {
        event = e || window.event;
        var x = e.pageX - player.offsetLeft - track.offsetLeft;
        percent = Math.round((x * 100) / track.offsetWidth);
        if (percent > 100) percent = 100;
        if (percent < 0) percent = 0;
        progress.style.width = percent + '%';
        handler.style.left = percent + '%';
        audio.play();
        audio.currentTime = (percent * duration) / 100
    }
    function nextTrack() {
        current_track++;
        current_track = current_track % (songs.length);
        song = songs[current_track];
        audio.src = song.url;
        audio.onloadeddata = function() {
            updateInfo();
        }
    }
    function prevTrack() {
        current_track--;
        current_track = (current_track == -1 ? (songs.length - 1) : current_track);
        song = songs[current_track];
        audio.src = song.url;
        audio.onloadeddata = function() {
            updateInfo();
        }
    }

    function updateInfo() {
        title.textContent = song.title;
        artist.textContent = song.artist;
        art.src = song.art;
        art.onload = function() {
            audio.play();
        }
    }

</script>
</html>
