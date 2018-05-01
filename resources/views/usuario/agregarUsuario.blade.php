@extends('layouts.head')

@section('contenido')
	
	<div class="container">

		<div class="row">
			
			<div class="col-md-12">
				
				<center><h1>Mantenedor Usuario</h1></center>
				<br>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-12">

					<form action="/registrarUsuario" class="" method="POST">
						{{ csrf_field() }}

						<label>Rut usuario</label>
						<input type="text" name="rutUsuario" class="form-control" placeholder="Ejemplo 19047702-0" required>
						<br>
						<label>Nombre del usuario</label>
						<input type="text" name="nombreUsuario" class="form-control" required>
						<br>
						<label>NickName del usuario</label>
						<input type="text" name="nickName" class="form-control" required>
						<br>
						<label>Clave del usuario</label>
						<input type="password" name="clave" class="form-control" required>
						<br>
						<label>Celular del usuario</label>
						<input type="number" name="celular" class="form-control" required>
						<br>
						<label>Direccion del usuario</label>
						<input type="text" name="direccion" class="form-control" required>
						<br>
						<label>Email del usuario</label>
						<input type="email" name="email" class="form-control" required>
						<br>
						<br>
						<button type="submit" class="btn btn-primary">Agregar usuario</button>

					</form>

			</div>

		</div>
		

	</div>

@endsection