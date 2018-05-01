<!DOCTYPE html>
<html>
<head>
<title>Neumateca</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,100' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1 class="navbar-brand"><a href="index.html">Neumateca</a></h1>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-right navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		      <li><a class="nav-link" data-toggle="modal" data-target="#exampleModal">Iniciar Sesion</a></li>
          <li><a class="nav-link" data-toggle="modal" data-target="#exampleModal2">Registrarse</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">

      <div class="item"> <img data-src="images/slider/image_2048x430.jpg" alt="First slide" src="images/servicios.jpg"></div>

      <div class="item active"> <img data-src="images/slider/image_2048x430.jpg" alt="Second slide" src="images/repuestos.jpg"></div>

      <div class="item"> <img data-src="images/slider/image_2048x430.jpg" alt="First slide" src="images/neumaticos.jpg"></div>

    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>About</h3>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
          <br />
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
      </div>
      <div class="col-md-3">
        <h3>Tweets</h3>
        <p><span>Tweet</span> <a href="#">@You</a><br />
          Etiam egestas, ipsum posuere accumsan sollicitudin, nulla mauris volutpat sem, sit amet rutrum risus. </p>
        <p><span>Tweet</span> <a href="#">@You</a><br />
          Quisque porta tellus vitae adipiscing molestie. Mauris et lacus blandit, malesuada.</p>
      </div>
      <div class="col-md-3">
        <h3>Mailing list</h3>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <br />
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email:</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="your email:">
          </div>
          <button type="submit" class="btn btn-primary">subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h3>Social</h3>
        <p>123 Business Way<br />
          San Francisco, CA 94108<br />
          USA<br />
          <br />
          Phone: (888) 123-4567<br />
          Fax: (887) 123-4567<br />
          <br />
        </p>
        <div class="social__icons"> <a href="#" class="socialicon socialicon-twitter"></a> <a href="#" class="socialicon socialicon-facebook"></a> <a href="#" class="socialicon socialicon-google"></a> </div>
      </div>
    </div>
    <hr></hr>
    <p class="text-center">&copy; Copyright ABC Company. All Rights Reserved.</p>
  </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Iniciar sesion</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="/validarUsuario" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de usuario</label>
                  <input class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Enter email"required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input class="form-control" name="clave" type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</a>
              </form>
          </div>
        </div>
      </div>
    </div>

     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Registro</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="/registrarUsuario" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                      <label>Rut usuario</label>
                      <input type="text" name="rutUsuario" class="form-control" placeholder="Ingrese su rut" required>
                      <br>
                      <label>Nombre del usuario</label>
                      <input type="text" name="nombreUsuario" class="form-control" placeholder="Ingrese su nombre" required>
                      <br>
                      <label>NickName del usuario</label>
                      <input type="text" name="nickName" class="form-control" placeholder="Ingrese su nombre de usuario" required>
                      <br>
                      <label>Clave del usuario</label>
                      <input type="password" name="clave" class="form-control" placeholder="Ingrese su contraseña" required>
                      <br>
                      <label>Celular del usuario</label>
                      <input type="number" name="celular" class="form-control" placeholder="Ingrese su celular" required>
                      <br>
                      <label>Direccion del usuario</label>
                      <input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion" required>
                      <br>
                      <label>Email del usuario</label>
                      <input type="email" name="email" class="form-control" placeholder="Ingrese su email" required>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary btn-block">Registrar</a>      
                </div>
              </form>   
          </div>
        </div>
      </div>
    </div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript">

$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>
</body>
</html>