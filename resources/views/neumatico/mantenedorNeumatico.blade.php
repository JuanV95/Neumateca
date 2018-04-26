@extends('layouts.head')

@section('contenido')

	<small class="pull-left">

		<a href="{{route('agregarNeumatico_path')}}" class="btn btn-info">Agregar neumatico</a> 
		<hr>
		
	</small>

	<table class="table">
	    <thead>
		    <tr>
		      <th scope="col">Ancho</th>
		      <th scope="col">Perfil</th>
		      <th scope="col">Aro</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Estado</th>
		      <th scope="col">Stock</th>
		    </tr>
	    </thead>

		@foreach($neumaticos as $neumatico)

		 <tbody>
		    <tr>
		      <td>{{$neumatico->ancho}}</td>
		      <td>{{$neumatico->perfil}}</td>
		      <td>{{$neumatico->aro}}</td>
		      <td>${{$neumatico->precioVenta}}</td>
		      <td>{{$neumatico->estado}}</td>
		      <td>{{$neumatico->stock}}</td>
		      <td><a href="{{route('editarNeumatico_path', ['neumatico' => $neumatico->id])}}" class="btn btn-info">Editar</a>
		      	<form action="{{ route('eliminarNeumatico_path', ['neumatico' => $neumatico->id]) }}" method="POST">

					{{csrf_field()}}
					{{method_field('DELETE')}}

					<button type="submit" class="btn btn-danger">Eliminar</button>

				</form></td>
		    </tr>
		  </tbody>

		@endforeach

	</table>

	{{$neumaticos->render()}}
	
@endsection