<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="librerias/jquery-3.3.1.js"></script>
  <script src="librerias/jquery-3.3.1.min.js"></script>
  <script src="librerias/materialize.js"></script>
  <script src="librerias/materialize.min.js"></script>

<title></title>
  <link rel="stylesheet" href=""> 
  <title></title>
</head>
<body style="background-color: #212121;">
    <div style="background-color: #282828;">
        {{csrf_field()}}
        <input type="text" id="search" placeholder='Escribe aquí...' style='font-size: 36px; margin-left: 140px; width: 1099px; height: 60px; color: #ffffff; background-color: #282828; border: hidden;'>
        
        
        <script type="text/javascript">
            $(document).ready(function()
            {
                
                $('#search').keyup(function(){
                    $('#contenido').empty();
                    
                    var busqueda=$('#search').val();
                    var token=$('input[name=_token]').val();
                    $.ajax({
                        url:'/buscar',
                        data:{consulta:busqueda, _token:token},
                        type:'POST',
                        datatype:'json',
                        success:function(response)
                        {
                            $('#renglon').empty();


                            $.each(response,function(i,r){
                                $('#contenido').append("<tr><td style='color: #FFFFFF'>"+r.nombre+"</td></tr>" );

                                console.log(response);
                            });

                        },
                        error:function(response)
                        {
                            $('#contenido').empty();

                        }
                    });
                });
            });
        </script>
    </div>
    <div id="lista">
        <table id="tabla">
            <thead>
                <tr></tr>
            </thead>
            <tbody id="contenido">

            </tbody>
        </table>
    </div>
    <div id="lista">
        <div id="renglon">
            <h3 style="color: #FFFFFF; margin-top: 50px;" align="center">Buscar en Spotify</h3>
            <p style="color: #FFFFFF;" align="center">Encuentra tus canciones, artistas, álbumes, playlists y podcasts favoritos.</p>
        </div>
        
    </div>

</body>
</html>