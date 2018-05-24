<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Neumatico;

class VentaController extends Controller
{
    
    public function agregarNeumaticoCarrito(Neumatico $neumatico){

    	session()->push('neumaticos.carro', $neumatico);
    	session()->flash('neumatico');

    	return redirect('/menuUser');
    }
}
