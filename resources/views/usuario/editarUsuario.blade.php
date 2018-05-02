@extends('layouts.agregar')

@section('contenido')

      <div class="card-header">Editar Usuario</div>
      <div class="card-body">
		<form action="{{ route('editarUsuario_path', ['usuario' => $usuario->id]) }}" method="POST">

			{{method_field('PUT')}}
			{{ csrf_field() }}

			<label>Rut usuario</label>
			<input type="text" name="rutUsuario" class="form-control" value="{{$usuario->rutUsuario or old('rutUsuario')}}" required>
			<br>
			<label>Nombre del usuario</label>
			<input type="text" name="nombreUsuario" class="form-control" value="{{$usuario->nombreUsuario or old('nombreUsuario')}}" required>
			<br>
			<label>NickName del usuario</label>
			<input type="text" name="nickName" class="form-control" value="{{$usuario->nickName or old('nickName')}}" required>
			<br>
			<label>Clave del usuario</label>
			<input type="password" name="clave" class="form-control" value="{{$usuario->clave or old('clave')}}" required>
			<br>
			<label>Celular del usuario</label>
			<input type="number" name="celular" class="form-control" value="{{$usuario->celular or old('celular')}}" required>
			<br>
			<label>Direccion del usuario</label>
			<input type="text" name="direccion" class="form-control" value="{{$usuario->direccion or old('direccion')}}" required>
			<br>
			<label>Email del usuario</label>
			<input type="email" name="email" class="form-control" value="{{$usuario->email or old('email')}}" required>
			<br>
			<br>
			<button type="submit" class="btn btn-info">Editar usuario</button>
		</form>
   </div>

@endsection