<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests\AgregarUsuarioRequest;

class UsuarioController extends Controller
{
	public function vistaAgregar(){

		return view('usuario/agregarUsuario');
	}

    public function vistaEditar(Usuario $usuario){

        return view('usuario/editarUsuario') -> with(['usuario' => $usuario]);
    }

	public function listaUsuarios(){

    	$usuarios = Usuario::orderBy('id','desc')->paginate(10);

    	return view('usuario/mantenedorUsuario')->with(['usuarios' => $usuarios]);
    }

    public function crear(Request $request){

    	$usuario = new Usuario();

    	$usuario -> rutUsuario = $request -> rutUsuario;
    	$usuario -> nombreUsuario = $request -> nombreUsuario;
    	$usuario -> nickName = $request -> nickName;
    	$usuario -> clave = $request -> clave;
    	$usuario -> celular = $request -> celular;
    	$usuario -> direccion = $request -> direccion;
    	$usuario -> email = $request -> email;

    	$usuario -> save();

    	return redirect('/mantenedorUsuario');

    }

    public function eliminarUsuario(Usuario $usuario){

        $usuario -> delete();

        session()->flash('mensaje', 'Usuario eliminado correctamente');

        return redirect('/mantenedorUsuario');

    }

    public function editarUsuario(Usuario $usuario, AgregarUsuarioRequest $request){

        $usuario -> rutUsuario = $request -> rutUsuario;
        $usuario -> nombreUsuario = $request -> nombreUsuario;
        $usuario -> nickName = $request -> nickName;
        $usuario -> clave = $request -> clave;
        $usuario -> celular = $request -> celular;
        $usuario -> direccion = $request -> direccion;
        $usuario -> email = $request -> email;

        $usuario -> save();

        return redirect('/mantenedorUsuario');
    }

}
