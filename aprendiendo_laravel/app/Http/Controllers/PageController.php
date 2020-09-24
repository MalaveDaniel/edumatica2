<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App;

class PageController extends Controller
{
    public function inicio(){

        $notas = App\Models\Nota::paginate(3);
    
        return view('welcome', compact('notas'));
    }

    public function detalle ($id){
        $nota=App\Models\Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){

        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = new App\Models\Nota;
        $notaNueva->nombre =$request->nombre;
        $notaNueva->descripcion =$request->descripcion;


        $notaNueva->save();

        return back()->with('mensaje', 'nota agregada!');
    }

    public function editar($id){
        $nota=App\Models\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){

        $notaUpdate =App\Models\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();
        return back()->with('mensaje', 'nota actualizada!');
    }

    public function eliminar($id){

        $notaEliminar =App\Models\Nota::findOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje', 'nota eliminada!');

    }

    public function fotos(){
        return view("fotos");
    }

    public function noticias(){
        return view("blog");
    }

    public function nosotros($nombre = null){
        $equipo=['Ignacio','Juanito','Pedrito'];

    //return view('nosotros', ['equipo' => $equipo]);
    return view('nosotros', compact('equipo', 'nombre'));
    }
}
