<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Http\Requests\AgregarSucursalRequest;

class SucursalController extends Controller
{
    public function vistaAgregar(){

		return view('sucursal/agregarSucursal');
	}

	public function vistaEditar(Sucursal $sucursal){

        return view('sucursal/editarSucursal') -> with(['sucursal' => $sucursal]);
    }

	public function crear(Request $request){

    	$sucursal = new Sucursal();

    	$sucursal -> nombre = $request -> nombre;
    	$sucursal -> direccion = $request -> direccion;
    	$sucursal -> telefono = $request -> telefono;
   
    	$sucursal -> save();

        session()->flash('sucursales');

    	return redirect('/menuAdmin');

    }

    public function editarSucursal(Sucursal $sucursal, AgregarSucursalRequest $request){

    	$sucursal -> nombre = $request -> nombre;
    	$sucursal -> direccion = $request -> direccion;
    	$sucursal -> telefono = $request -> telefono;
   
    	$sucursal -> save();

        session()->flash('sucursales');

    	return redirect('/menuAdmin');
    }

    public function eliminarSucursal(Sucursal $sucursal){

        $sucursal -> delete();

        session()->flash('sucursales');

        return redirect('/menuAdmin');

    }
}
