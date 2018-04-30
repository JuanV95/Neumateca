<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Neumatico;
use App\Repuesto;
use App\Http\Requests\AgregarUsuarioRequest;

class UsuarioController extends Controller
{
    public function vistaAdministrador(){

        $usuarios = Usuario::orderBy('id','desc')->paginate(10);
        $neumaticos = Neumatico::orderBy('id','desc')->paginate(10);
        $repuestos = Repuesto::orderBy('id','desc')->paginate(10);

        return view('administrador/menuAdministrador')->with(['usuarios' => $usuarios, 'neumaticos' => $neumaticos, 'repuestos' => $repuestos]);
    }

    public function vistaIndex(){

        return view('index');
    }

	public function vistaAgregar(){

		return view('usuario/agregarUsuario');
	}

    public function vistaEditar(Usuario $usuario){

        return view('usuario/editarUsuario') -> with(['usuario' => $usuario]);
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

        session()->flash('usuario');

    	return redirect('/menuAdmin');

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

        session()->flash('usuario');

        return redirect('/mantenedorUsuario');
    }

    public function eliminarUsuario(Usuario $usuario){

        $usuario -> delete();

        session()->flash('usuario');

        return redirect('/menuAdmin');

    }

}
