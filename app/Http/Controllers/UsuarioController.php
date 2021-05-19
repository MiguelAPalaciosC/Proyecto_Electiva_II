<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioFormRequest;
use App\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            if(Auth::user()->usertype_id_usertype == 1){
            $usuario=DB::table('users as us')
            ->join('usertype as ut','us.usertype_id_usertype','=','ut.id_usertype')
            ->select('us.id','us.name','us.email','us.password','ut.name as usertype_id_usertype')
            ->orderBy('id','asc')
            ->paginate(10);

            $usertype=DB::table('usertype')->get();
            
            return view('usuario.index',["usuario"=>$usuario, "usertype"=>$usertype]);
            }
            else{
                return Redirect::to('home')->with('info','El usuario no tiene los permisos necesarios para ingresar al modulo');
            }
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (UsuarioFormRequest $request){
        $usuario=new User;
        $usuario->name=$request->get('nombre');
        $usuario->email=$request->get('correo');
        $usuario->password=bcrypt($request->get('contraseña'));
        $usuario->usertype_id_usertype=$request->get('usertype_id_usertype');
        $usuario->save();
        
        return Redirect::to('usuario')->with('info','Usuario Agregado Correctamente');
    }
}
