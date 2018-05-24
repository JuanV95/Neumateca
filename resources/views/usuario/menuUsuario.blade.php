<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Neumateca</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('shortcodes/shortcodes.css') }}">
  <script languague="javascript">

        function mostrarMantenedorNeumaticos() {

            neumaticos = document.getElementById('neumaticos');
            repuestos =  document.getElementById('repuestos');

            neumaticos.style.display = '';
            repuestos.style.display = 'none';
            neumaticosCarro.style.display = 'none';

        }

        function mostrarMantenedorRepuestos() {

            neumaticos = document.getElementById('neumaticos');
            repuestos =  document.getElementById('repuestos');

            repuestos.style.display = '';
            neumaticos.style.display = 'none';
            neumaticosCarro.style.display = 'none';
        }

        function mostrarMantenedorCarro() {

            neumaticos = document.getElementById('neumaticos');
            repuestos =  document.getElementById('repuestos');
            neumaticosCarro = document.getElementById('neumaticosCarro');

            neumaticosCarro.style.display = '';
            repuestos.style.display = 'none';
            neumaticos.style.display = 'none';

        }

  </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Bienvenido {{session()->get('nickName')}}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Venta</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="javascript:mostrarMantenedorNeumaticos();">Neumaticos</a>
            </li>
            <li>
              <a href="javascript:mostrarMantenedorRepuestos();">Repuestos</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="">
            <i class="fa fa-cart-arrow-down"></i>
            <span class="nav-link-text">Carro</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">

    @if(session()->has('neumatico'))

      <div id="neumaticos" class="container-fluid">

    @else

      <div id="neumaticos" class="container-fluid" style="display:none;">

    @endif
    
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"> Lista de Neumaticos disponibles en la sucursal {{session()->get('sucursal')}}</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="neumaticostb" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th scope="col">Ancho</th>
                  <th scope="col">Perfil</th>
                  <th scope="col">Aro</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Opciones</th>
                </tr>
              </thead>

            @foreach($neumaticos as $neumatico)

             <tbody>
                <tr>
                  <td>{{$neumatico->ancho}}</td>
                  <td>{{$neumatico->perfil}}</td>
                  <td>{{$neumatico->aro}}</td>
                  <td>${{$neumatico->precioVenta}}</td>
                  <td>{{$neumatico->estado}}</td>
                  <td>{{$neumatico->stock}}</td>
                  <td><a href="{{route('agregarNeumaticoCarro_path', ['neumatico' => $neumatico->id])}}" class="btn btn-primary">Agregar</a></td>
                </tr>
              </tbody>

            @endforeach
            </table>
            {{$neumaticos->render()}}
          </div>
        </div>
      </div>
    </div>

    @if(session()->has('repuesto'))

      <div id="repuestos" class="container-fluid">

    @else

      <div id="repuestos" class="container-fluid" style="display:none;">

    @endif
    
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"> Lista de Repuestos disponibles en la sucursal {{session()->get('sucursal')}}</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="repuestostb" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
              </thead>

            @foreach($repuestos as $repuesto)

             <tbody>
                <tr>
                  <td>{{$repuesto->descripcion}}</td>
                  <td>${{$repuesto->precioVenta}}</td>
                  <td>{{$repuesto->stock}}</td>
                  <td>{{$repuesto->estado}}</td>
                  <td><a href="" class="btn btn-primary">Agregar</a></td>
                </tr>
              </tbody>

            @endforeach
            </table>
            {{$repuestos->render()}}
          </div>
        </div>
      </div>
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro que quieres cerrar sesion?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('cerrarSesion_path')}}">Cerrar sesion</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script>
      $(document).ready( function () {
      $('#neumaticostb').DataTable();
      } );
    </script> 
     <script>
      $(document).ready( function () {
      $('#repuestostb').DataTable();
      } );
    </script> 
  </div>
</body>

</html>
