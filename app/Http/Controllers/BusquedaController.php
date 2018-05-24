<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Response;

class busquedaController extends Controller
{
    public function autocompletarMarcaNeumatico(){

		$term = Input::get('term');
	
		$results = array();
		
		$queries = DB::table('MarcaNeumatico')->where('nombreMarcaNeumatico', 'LIKE', '%'.$term.'%')->take(5)->get();
		
		foreach ($queries as $query)
		{
		    $results[] = [ 'idMarcaNeumatico' => $query->idMarcaNeumatico, 'nombreMarcaNeumatico' => $query->nombreMarcaNeumatico];
		}

		return Response::json($results);
	}
}
