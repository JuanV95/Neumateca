<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repuesto;
use App\Http\Requests\AgregarRepuestoRequest;

class RepuestoController extends Controller
{
    public function vistaAgregar(){

		return view('repuesto/agregarRepuesto');
	}

	public function vistaEditar(Repuesto $repuesto){

        return view('repuesto/editarRepuesto') -> with(['repuesto' => $repuesto]);
    }

    public function listaRepuestos(){

    	$repuestos = Repuesto::orderBy('id','desc')->paginate(10);

    	return view('repuesto/mantenedorRepuesto')->with(['repuestos' => $repuestos]);
    }

	public function crear(Request $request){

    	$repuesto = new Repuesto();

    	$repuesto -> idSucursal = $request -> idSucursal;
    	$repuesto -> idCategoria = $request -> idCategoria;
    	$repuesto -> idModeloRepuesto = $request -> idModeloRepuesto;
    	$repuesto -> idMarcaRepuesto = $request -> idMarcaRepuesto;
    	$repuesto -> descripcion = $request -> descripcion;
    	$repuesto -> precioVenta = $request -> precioVenta;
    	$repuesto -> stock = $request -> stock;
    	$repuesto -> estado = $request -> estado;

    	$repuesto -> save();

    	return redirect('/mantenedorRepuesto');
	}

	public function editarRepuesto(Repuesto $repuesto, AgregarRepuestoRequest $request){

        $repuesto -> idSucursal = $request -> idSucursal;
    	$repuesto -> idCategoria = $request -> idCategoria;
    	$repuesto -> idModeloRepuesto = $request -> idModeloRepuesto;
    	$repuesto -> idMarcaRepuesto = $request -> idMarcaRepuesto;
    	$repuesto -> descripcion = $request -> descripcion;
    	$repuesto -> precioVenta = $request -> precioVenta;
    	$repuesto -> stock = $request -> stock;
    	$repuesto -> estado = $request -> estado;

    	$repuesto -> save();

    	return redirect('/mantenedorRepuesto');
    }

    public function eliminarRepuesto(Repuesto $repuesto){

        $repuesto -> delete();

        session()->flash('mensaje', 'Repuesto eliminado correctamente');

        return redirect('/mantenedorRepuesto');

    }
}
