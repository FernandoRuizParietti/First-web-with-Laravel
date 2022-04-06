@extends('plantilla')

@section('seccion')
<h1>Este es nuestro equipo de trabajo</h1>
@foreach($equipo as $ele)
<a href="{{route('us',$ele)}}" class="h4 text-danger">{{$ele}}</a><br>
@endforeach

@if(!empty($nombre))

@if($nombre == 'Fer')
    <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
    <p>{{$nombre}}  Lorem ipsum 1 dolor sit amet consectetur adipisicing elit. 
        Nobis minus, nihil quos earum et id aut quisquam cupiditate? 
        Corrupti voluptates veniam quo iure. Ipsum hic quo iste? Architecto, 
        corrupti alias!</p>
@elseif($nombre == 'Pepe')     
    <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
    <p>{{$nombre}}  Lorem ipsum 2 dolor sit amet consectetur adipisicing elit. 
        Nobis minus, nihil quos earum et id aut quisquam cupiditate? 
        Corrupti voluptates veniam quo iure. Ipsum hic quo iste? Architecto, 
        corrupti alias!</p>            

@elseif($nombre == 'Juan')
    <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
    <p>{{$nombre}}  Lorem ipsum 3 dolor sit amet consectetur adipisicing elit. 
        Nobis minus, nihil quos earum et id aut quisquam cupiditate? 
        Corrupti voluptates veniam quo iure. Ipsum hic quo iste? Architecto, 
        corrupti alias!</p>
        @else
        <p>Nombre no encontrado</p>
        @endif

@endif

@endsection