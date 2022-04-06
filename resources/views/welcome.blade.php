@extends('plantilla')

@section('seccion')
<div class="container my-4">
    <h1 class="display-4">Notas</h1>

    @if(session('mensaje'))
    <div class="alert alert-success"> <!--Alert de bootstrap  -->
        {{session('mensaje')}}
    </div>

    @endif

    <form action="{{route('notas.crear')}}" method="POST"> <!--Aca agrego info nueva a mi db-->
        <!--Token que evita que se pueda ingresar datos de un formulario malicioso o robot  -->
        {{ csrf_field() }}

        <!-- @error('nombre')  
            <div class="alert alert-danger">
                El nombre es obligatorio
            </div>
        @enderror -->
        
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($notas as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
                <a href="{{route('notas.detalle', $item)}}">
                    {{$item->nombre}}
                </a>
            </td>
            <td>{{$item->descripcion}}</td>
            <td>
                <a href="{{route('notas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

