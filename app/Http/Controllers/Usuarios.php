<?php

namespace App\Http\Controllers;
use App\Modelos\Usuario;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;

class Usuarios extends Controller
{

    function IniciarSesion(Request $request)
    {
        session_start();
        $Usuario  = $request->input("userinput");
        $Password = $request->input("paswordninput");
      
        $usuario = Usuario::where('correo', '=', $Usuario)->get()->first();

        if($usuario != null)
        {
           
          if ($Password == $usuario->contrasena) 
          {
            return redirect('/')->with('usuario', $usuario);
          }
        }
      
        return redirect('iniciarsesion')->with("Error","Usuario y/o contraseña incorrectos");
    }

    function Registrarusuario(Request $request)
    {
        if ($request->email == $request->emailconfirmation && $request->email != null && $request->emailconfirmation != null) 
        {
            $User = new Usuario;
            $User->nombre  = $request->comotellamas;
            $User->correo = $request->email;
            $User->contrasena = $request->contrasena;
            $User->fecha_de_nacimiento = "" . $request->año . "-" . $request->mes . "-" . $request->dia . "";
            $User->genero  = $request->genero;
            $User->save();

            return redirect('/');
        }
        return redirect('iniciarsesion');

    }
}
