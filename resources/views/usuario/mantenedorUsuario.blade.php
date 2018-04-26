@extends('layouts.head')

@section('contenido')

	<small class="pull-left">

		<a href="{{route('agregarUsuario_path')}}" class="btn btn-info">Agregar usuario</a> 
		<hr>
		
	</small>

	<table class="table">
	    <thead>
		    <tr>
		      <th scope="col">Rut Usuario</th>
		      <th scope="col">Nombre Usuario</th>
		      <th scope="col">Celular</th>
		      <th scope="col">Direccion</th>
		      <th scope="col">email</th>
		    </tr>
	    </thead>

		@foreach($usuarios as $usuario)

		 <tbody>
		    <tr>
		      <td>{{$usuario->rutUsuario}}</td>
		      <td>{{$usuario->nombreUsuario}}</td>
		      <td>{{$usuario->celular}}</td>
		      <td>{{$usuario->direccion}}</td>
		      <td>{{$usuario->email}}</td>
		      <td><a href="{{route('editarUsuario_path', ['usuario' => $usuario->id])}}" class="btn btn-info">Editar</a>
		      	<form action="{{ route('eliminarUsuario_path', ['usuario' => $usuario->id]) }}" method="POST">

					{{csrf_field()}}
					{{method_field('DELETE')}}

					<button type="submit" class="btn btn-danger">Eliminar</button>

				</form></td>
		    </tr>
		  </tbody>

		@endforeach

	</table>

	{{$usuarios->render()}}
	
@endsection