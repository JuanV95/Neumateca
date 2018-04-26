@extends('layouts.head')

@section('contenido')

	<div class="container">

		<div class="row">
			
			<div class="col-md-12">
				
				<center><h1>Mantenedor Neumatico</h1></center>
				<br>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-12">
				
				<center>
					<form action="{{ route('editarNeumatico_path', ['neumatico' => $neumatico->id]) }}" method="POST">

						{{method_field('PUT')}}
						{{ csrf_field() }}

						<label>Ancho del neumatico</label>
						<input type="number" name="ancho" class="form-control" value="{{$neumatico->ancho or old('ancho')}}" required>
						<br>
						<label>Perfil del neumatico</label>
						<input type="number" name="perfil" class="form-control" value="{{$neumatico->perfil or old('perfil')}}" required>
						<br>
						<label>Aro del neumatico</label>
						<input type="number" name="aro" class="form-control" value="{{$neumatico->aro or old('aro')}}" required>
						<br>
						<label>Id de la marca del neumatico</label>
						<input type="number" name="idMarcaNeumatico" class="form-control" value="{{$neumatico->idMarcaNeumatico or old('idMarcaNeumatico')}}" required>
						<br>
						<label>Id de la sucursal donde se encuentra el neumatico</label>
						<input type="number" name="idSucursal" class="form-control" value="{{$neumatico->idSucursal or old('idSucursal')}}" required>
						<br>
						<label>Precio de venta del neumatico</label>
						<input type="number" name="precioVenta" class="form-control" value="{{$neumatico->precioVenta or old('precioVenta')}}" required>
						<br>
						<label>Estado del neumatico</label>
						<input type="text" name="estado" class="form-control" value="{{$neumatico->estado or old('estado')}}" required>
						<br>
						<label>Cantidades en stock del neumatico</label>
						<input type="number" name="stock" class="form-control" value="{{$neumatico->stock or old('stock')}}" required>
						<br>
						<br>
						<button type="submit" class="btn btn-info">Editar neumatico</button>

					</form>
				</center>

			</div>

		</div>
		

	</div>

@endsection