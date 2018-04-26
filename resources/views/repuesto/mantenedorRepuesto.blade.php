@extends('layouts.head')

@section('contenido')

	<small class="pull-left">

		<a href="{{route('agregarRepuesto_path')}}" class="btn btn-info">Agregar repuesto</a> 
		<hr>
		
	</small>

	<table class="table">
	    <thead>
		    <tr>
		      <th scope="col">Descripcion</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Stock</th>
		      <th scope="col">Estado</th>
		    </tr>
	    </thead>

		@foreach($repuestos as $repuesto)

		 <tbody>
		    <tr>
		      <td>{{$repuesto->descipcion}}</td>
		      <td>${{$repuesto->precioVenta}}</td>
		      <td>{{$repuesto->stock}}</td>
		      <td>{{$repuesto->estado}}</td>
		      <td><a href="{{route('editarRepuesto_path', ['repuesto' => $repuesto->id])}}" class="btn btn-info">Editar</a>
		      	<form action="{{ route('eliminarRepuesto_path', ['repuesto' => $repuesto->id]) }}" method="POST">

					{{csrf_field()}}
					{{method_field('DELETE')}}

					<button type="submit" class="btn btn-danger">Eliminar</button>

				</form></td>
		    </tr>
		  </tbody>

		@endforeach

	</table>

	{{$repuestos->render()}}
	
@endsection