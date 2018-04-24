@extends('layouts.head')

@section('contenido')

	<small class="pull-left">

		<a href="{{route('agregarUsuario_path')}}" class="btn btn-info">Agregar usuario</a> 
		<hr>
		
	</small>

	@foreach($usuarios as $usuario)

		<div class="row">
					
			<div class="col-md-12">
				
				<h2>

					{{$usuario->nombreUsuario}}

					<small class="pull-right">
						
						<a href="{{route('editarUsuario_path', ['usuario' => $usuario->id])}}" class="btn btn-info">Editar</a>
						<form action="{{ route('eliminarUsuario_path', ['usuario' => $usuario->id]) }}" method="POST">

							{{csrf_field()}}
							{{method_field('DELETE')}}

							<button type="submit" class="btn btn-danger">Eliminar</button>

						</form>

					</small>

				</h2>

				<p>{{$usuario->direccion}}</p>

			</div>

		</div>

		<hr>

	@endforeach

	{{$usuarios->render()}}
	
@endsection