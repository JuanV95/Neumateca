@extends('layouts.agregar')

@section('contenido')

      <div class="card-header">Agregar Repuesto</div>
      <div class="card-body">
        <form action="/agregarRepuesto" method="POST">
			{{ csrf_field() }}

			<label>Id de la sucursal donde se encuentra el repuesto</label>
			<input type="number" name="idSucursal" class="form-control" required>
			<br>
			<label>Id de la categoria del repuesto</label>
			<input type="number" name="idCategoria" class="form-control" required>
			<br>
			<label>Id del modelo del repuesto</label>
			<input type="number" name="idModeloRepuesto" class="form-control" required>
			<br>
			<label>Id de la marca del repuesto</label>
			<input type="number" name="idMarcaRepuesto" class="form-control" required>
			<br>
			<label>Descripccion</label>
			<input type="text" name="descripcion" class="form-control" required>
			<br>
			<label>Precio de venta del repuesto</label>
			<input type="number" name="precioVenta" class="form-control" required>
			<br>
			<label>Cantidades en stock del repuesto</label>
			<input type="number" name="stock" class="form-control" required>
			<br>
			<label>Estado</label>
			<input type="text" name="estado" class="form-control" required>
			<br>
			<br>
			<button type="submit" class="btn btn-primary">Agregar Repuesto</button>
		</form>
      </div>

@endsection
