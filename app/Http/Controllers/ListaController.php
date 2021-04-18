<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Estudiante;

use Illuminate\Support\Facades\DB;


class ListaController extends Controller
{
     public function index(Request $request)
     {

        $texto=trim($request->get ('texto'));
        $estudiante=DB::table ('estudiante')->select('Matricula','Nombre','Edad','Direccion')
        ->where ('matricula','=',$texto)->paginate(10);
        return view ('estudiante.index', compact('estudiante','texto'));
    }

    public function create()
    {
        return view('estudiante.create');
    }

    public function store(Request $request)
    {
        $estudiante = new estudiante;

        $estudiante -> Matricula=$request->input('Matricula');
        $estudiante -> Nombre=$request->input('Nombre');
        $estudiante -> Edad=$request->input('Edad');
        $estudiante -> Direccion=$request->input('Direccion');
        $estudiante -> save();
        return redirect()->route('estudiante.index');

    }
}
