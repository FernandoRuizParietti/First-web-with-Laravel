@extends('plantilla')

@section('seccion')
<h1>Editar nota </h1>

@if(session('mensaje'))

<div class="alert alert-success">{{session('mensaje')}}</div>
@endif

<h4>id: {{$nota->id}}</h4>
<form action="{{route('notas.update', $nota->id)}}" method="POST"> <!--Aca agrego info nueva a mi db-->
    <!--HTML no admite el metodo PUT, por eso se lo tengo que pasar aparte -->
    <input type="hidden" name="_method" value="PUT">
    
    <!--Token que evita que se pueda ingresar datos de un formulario malicioso o robot  -->
    {{ csrf_field() }}

    
    <input 
    type="text" 
    name="nombre" 
    placeholder="Nombre" 
    class="form-control mb-2"
    value ="{{$nota->nombre}}">

    <input 
    type="text" 
    name="descripcion" 
    placeholder="Descripcion" 
    class="form-control mb-2"
    value ="{{$nota->descripcion }}">

    <button class="btn btn-warning btn-block" type="submit">Editar</button>
</form>

@endsection