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
					<form action="{{ route('editarRepuesto_path', ['repuesto' => $repuesto->id]) }}" method="POST">

						{{method_field('PUT')}}
						{{ csrf_field() }}

						<label>Id de la sucursal donde se encuentra el repuesto</label>
						<input type="number" name="idSucursal" class="form-control" value="{{$repuesto->idSucursal or old('idSucursal')}}" required>
						<br>
						<label>Id de la categoria del repuesto</label>
						<input type="number" name="idCategoria" class="form-control" value="{{$repuesto->idCategoria or old('idCategoria')}}" required>
						<br>
						<label>Id del modelo del repuesto</label>
						<input type="number" name="idModeloRepuesto" class="form-control" value="{{$repuesto->idModeloRepuesto or old('idModeloRepuesto')}}" required>
						<br>
						<label>Id de la marca del repuesto</label>
						<input type="number" name="idMarcaRepuesto" class="form-control" value="{{$repuesto->idMarcaRepuesto or old('idMarcaRepuesto')}}" required>
						<br>
						<label>Descripccion</label>
						<input type="text" name="descripcion" class="form-control" value="{{$repuesto->descripcion or old('descripcion')}}" required>
						<br>
						<label>Precio de venta del repuesto</label>
						<input type="number" name="precioVenta" class="form-control" value="{{$repuesto->precioVenta or old('precioVenta')}}" required>
						<br>
						<label>Cantidades en stock del repuesto</label>
						<input type="number" name="stock" class="form-control" value="{{$repuesto->stock or old('stock')}}" required>
						<br>
						<label>Estado</label>
						<input type="text" name="estado" class="form-control" value="{{$repuesto->estado or old('estado')}}" required>
						<br>
						<br>
						<button type="submit" class="btn btn-info">Editar repuesto</button>

					</form>
				</center>

			</div>

		</div>
		

	</div>

@endsection