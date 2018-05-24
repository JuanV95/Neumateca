@extends('layouts.agregar')

@section('contenido')

      <div class="card-header">Editar Usuario</div>
      <div class="card-body">
		<form action="{{ route('editarSucursal_path', ['sucursal' => $sucursal->id]) }}" method="POST">

			{{method_field('PUT')}}
			{{ csrf_field() }}

			<label>Nombre de la sucursal</label>
            <input type="text" name="nombre" class="form-control"  value="{{$sucursal->nombre or old('nombre')}}" required>
            <br>
            <label>Direccion de la sucursal</label>
            <input type="text" name="direccion" class="form-control" value="{{$sucursal->direccion or old('direccion')}}" required>
            <br>
            <label>Telefono de la sucursal</label>
            <input type="number" name="telefono" class="form-control" value="{{$sucursal->telefono or old('telefono')}}" required>
            <br>
            <br>
			<button type="submit" class="btn btn-info">Editar sucursal</button>
		</form>
   </div>

@endsection