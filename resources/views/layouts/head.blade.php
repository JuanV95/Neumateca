<!DOCTYPE html>
<html = lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	<meta charset="utf-8">
	<title>Neumateca</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


</head>

<body>

	<div class="row"> 

			<div class="col-md-12">

				<h1>Neumateca</h1>
				<p>Venta de neumaticos y repuestos de autos</p>

			</div>

	</div>

	<hr>

	@include('layouts._errorAlEnviarFormulario')
	@include('layouts._mensajes')

	@yield('contenido')

</body>
</html>