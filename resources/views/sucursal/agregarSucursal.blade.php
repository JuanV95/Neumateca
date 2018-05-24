@extends('layouts.agregar')

@section('contenido')

      <div class="card-header">Agregar Usuario</div>
      <div class="card-body">
        <form action="/agregarSucursal" class="" method="POST">
          {{ csrf_field() }}

          <label>Nombre de la sucursal</label>
          <input type="text" name="nombre" class="form-control" required>
          <br>
          <label>Direccion de la sucursal</label>
          <input type="text" name="direccion" class="form-control" required>
          <br>
          <label>Telefono de la sucursal</label>
          <input type="number" name="telefono" class="form-control" required>
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Agregar sucursal</button>
        </form>
      </div>

@endsection