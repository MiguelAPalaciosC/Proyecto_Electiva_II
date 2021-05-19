<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {        
        $materias = array("Calculo", "Fisica", "Programacion", "Estadistica");
        return view('profesores.index', ["materias" => $materias, "clear" => true]);
    }

    public function busquedaMaterias($nombre) {
        $tareas = [[
            "nombre" => "Tarea1",
            "nota" => "3.5",
            "descripcion" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "fecha" => "10/10/21"
        ],
        [
            "nombre" => "Tarea2",
            "nota" => "4.5",
            "descripcion" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "fecha" => "10/10/21"
        ],
        [
            "nombre" => "Tarea3",
            "nota" => "3.7",
            "descripcion" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "fecha" => "10/10/21"
        ],
        [
            "nombre" => "Tarea4",
            "nota" => "3.8",
            "descripcion" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "fecha" => "10/10/21"
        ]];
        $materias = array("Calculo", "Fisica", "Programacion", "Estadistica");
        return view('profesores.materias', ["nombre" => $nombre, "tareas" => $tareas, "materias" => $materias]);
    }
}
