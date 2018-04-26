<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neumatico;
use App\Http\Requests\AgregarNeumaticoRequest;

class NeumaticoController extends Controller
{
	public function vistaAgregar(){

		return view('neumatico/agregarNeumatico');
	}

	public function vistaEditar(Neumatico $neumatico){

        return view('neumatico/editarNeumatico') -> with(['neumatico' => $neumatico]);
    }

    public function listaNeumaticos(){

    	$neumaticos = Neumatico::orderBy('ancho','desc')->paginate(10);

    	return view('neumatico/mantenedorNeumatico')->with(['neumaticos' => $neumaticos]);
    }

	public function crear(Request $request){

    	$neumatico = new Neumatico();

    	$neumatico -> ancho = $request -> ancho;
    	$neumatico -> perfil = $request -> perfil;
    	$neumatico -> aro = $request -> aro;
    	$neumatico -> idMarcaNeumatico = $request -> idMarcaNeumatico;
    	$neumatico -> idSucursal = $request -> idSucursal;
    	$neumatico -> precioVenta = $request -> precioVenta;
    	$neumatico -> estado = $request -> estado;
    	$neumatico -> stock = $request -> stock;

    	$neumatico -> save();

    	return redirect('/mantenedorNeumatico');

    }

    public function editarNeumatico(Neumatico $neumatico, AgregarNeumaticoRequest $request){

        $neumatico -> ancho = $request -> ancho;
    	$neumatico -> perfil = $request -> perfil;
    	$neumatico -> aro = $request -> aro;
    	$neumatico -> idMarcaNeumatico = $request -> idMarcaNeumatico;
    	$neumatico -> idSucursal = $request -> idSucursal;
    	$neumatico -> precioVenta = $request -> precioVenta;
    	$neumatico -> estado = $request -> estado;
    	$neumatico -> stock = $request -> stock;

    	$neumatico -> save();

    	return redirect('/mantenedorNeumatico');
    }

    public function eliminarNeumatico(Neumatico $neumatico){

        $neumatico -> delete();

        session()->flash('mensaje', 'Neumatico eliminado correctamente');

        return redirect('/mantenedorNeumatico');

    }
}
