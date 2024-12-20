<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return view('tareas/index', compact('tareas'));
    }
    public function create(){
        $trabajadores = Trabajador::all();
        return view('tareas/create', compact('trabajadores'));
    }
    public function store(Request $request){
        $tarea = new Tarea();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();

        //Tarea:create($request->all());
        return redirect('/tareas/index');
    }
    public function edit($id){
        $tarea = Tarea::find($id);
        $trabajadores = Trabajador::all();
        return view('tareas/edit', compact('tarea', 'trabajadores'));
    }
    public function update(Request $request, $id){
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();
        return redirect('/tareas/index');
    }
    public static function destroy($id){
        $tarea = Tarea::find($id)->delete();
        return redirect('/tareas/index');
    }
}
