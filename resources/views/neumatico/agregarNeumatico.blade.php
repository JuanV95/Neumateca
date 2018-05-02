@extends('layouts.agregar')

@section('contenido')

      <div class="card-header">Agregar Neumatico</div>
      <div class="card-body">
        <form action="/agregarNeumatico" method="POST">
			{{ csrf_field() }}

			<label>Ancho del neumatico</label>
			<input type="number" name="ancho" class="form-control" required>
			<br>
			<label>Perfil del neumatico</label>
			<input type="number" name="perfil" class="form-control" required>
			<br>
			<label>Aro del neumatico</label>
			<input type="number" name="aro" class="form-control" required>
			<br>
			<label>Id de la marca del neumatico</label>
			<input type="number" name="idMarcaNeumatico" class="form-control" required>
			<br>
			<label>Id de la sucursal donde se encuentra el neumatico</label>
			<input type="number" name="idSucursal" class="form-control" required>
			<br>
			<label>Precio de venta del neumatico</label>
			<input type="number" name="precioVenta" class="form-control" required>
			<br>
			<label>Estado del neumatico</label>
			<input type="text" name="estado" class="form-control" required>
			<br>
			<label>Cantidades en stock del neumatico</label>
			<input type="number" name="stock" class="form-control" required>
			<br>
			<br>
			<button type="submit" class="btn btn-primary">Agregar neumatico</button>
		</form>
      </div>

@endsection
