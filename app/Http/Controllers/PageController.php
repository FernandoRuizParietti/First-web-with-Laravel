<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function fotos(){
        return view('fotos');
    }

    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre = null){
        $equipo = ['Fer','Pepe','Juan'];

        return view('nosotros', compact('equipo','nombre')); //Hace lo mismo que arriba, sin tener que duplicar info
        
    }
}
