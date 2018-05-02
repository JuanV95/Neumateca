<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function registrarUsuario(Request $request){

        $usuario = new Usuario();

        $usuario -> rutUsuario = $request -> rutUsuario;
        $usuario -> nombreUsuario = $request -> nombreUsuario;
        $usuario -> nickName = $request -> nickName;
        $usuario -> clave = $request -> clave;
        $usuario -> celular = $request -> celular;
        $usuario -> direccion = $request -> direccion;
        $usuario -> email = $request -> email;

        $usuario -> save();

        return redirect('/');

    }
}
