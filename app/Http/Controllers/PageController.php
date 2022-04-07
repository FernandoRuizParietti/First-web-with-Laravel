<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Validator;

class PageController extends Controller
{
    public function inicio(){
        //el metodo all() lo saco de Elocuent
        //$notas = App\Nota::all();  //App es el namespace y Nota el nombre del modelo en Nota.php
        $notas = App\Nota::paginate(2);//Reem plazo el metodo all() por paginate() y le indico cuantos elementos ver po pagina
        return view('welcome', compact('notas'));
    }

    public function detalle($id){
          //el metodo findOrFail() lo saco de Elocuent
        $nota = App\Nota::findOrFail($id); // si es fail, envia automaticamente un e404
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){ //Request captura la info enviada en el form crear
        
        //Aca valido los campos para evitar que de error al agregar Nota con campos vacios
        $this->validate($request,[
            'nombre'=> 'required',
            'descripcion'=>'required'
        ]);
        
        //return $request->all();
        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();//Esto es para guardar y proviene de Elocuent

        return back()->with('mensaje','Nota agregada!'); //Este metodo me devuelve a la pagina anterior
    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id); // si es fail, envia automaticamente un e404
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){
        $notaUpdate = App\Nota::findOrFail($id); // si es fail, envia automaticamente un e404
        $notaUpdate->nombre =  $request->nombre;
        $notaUpdate->descripcion =  $request->descripcion;

        $notaUpdate->save();//Esto es para guardar y proviene de Elocuent

        return back()->with('mensaje','Nota actualizada!'); //Este metodo me devuelve a la pagina anterior

    }

    public function eliminar($id){

        $notaUpdate = App\Nota::findOrFail($id); // si es fail, envia automaticamente un e404
        $notaUpdate->delete();

        return back()->with('mensaje','Nota eliminada!'); //Este metodo me devuelve a la pagina anterior
    }

    public function fotos(){
        return view('fotos');
    }

    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre = null){
        $equipo = ['Fer','Pepe','Juan']; //este aray simula info traida de una db

        return view('nosotros', compact('equipo','nombre')); //Hace lo mismo que arriba, sin tener que duplicar info
        
    }
}
