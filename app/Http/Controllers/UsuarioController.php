<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioFormRequest;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        if ($request){
            if((Auth::user()->usertype_id_usertype)==1){
                $usuario=DB::table('users as u')
                ->join('usertype as ust','u.usertype_id_usertype','=','ust.id_usertype')
                ->select('u.id','u.name','u.email','u.password','ust.name as usertype_id_usertype')
                ->orderBy('id','asc')
                ->paginate(10);
    
                $usertype=DB::table('usertype')->get();
    
                
                return view('usuario.index',["usuario"=>$usuario, "usertype"=>$usertype]);
            }
            else{
                return Redirect::to('home')->with('info','El usuario no cuenta con los permisos necesarios para acceder al modulo');
            }

        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (UsuarioFormRequest $request){
        $usuario=new User();
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->usertype_id_usertype=$request->get('usertype_id_usertype');
        $usuario->save();
        return Redirect::to('usuario')->with('info','Usuario Agregado Correctamente');
    }
}
