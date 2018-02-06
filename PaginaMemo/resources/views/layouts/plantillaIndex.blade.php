<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

<style>
/* Make the image fully responsive */
.carousel-inner img {
    width: 100%;
    height: 100%;
}
</style>


  </head>
  <body>
<div class="container-fluid"  style="Margin:0px;padding:0px">
	<div class="row">
		<div class="col-md-12">
      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:rgb(144, 10, 22)">
       <!-- Brand -->
       <a class="navbar-brand" href="#">Memo Torrijos</a>
       <div class="navbar-header">

                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              	&#9776;
              	</button>
                <!--<a class="navbar-brand" href="#">Inicio</a>-->
      </div>
      <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
             <!-- Links -->
             <ul class="navbar-nav ">
               <li class="nav-item">
                 <a class="nav-link" href="#">¿Quien soy?</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Cursos</a>
               </li>
               <!-- Dropdown -->
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                   Sesion
                 </a>
                 <div class="dropdown-menu">
                   <a class="dropdown-item" href="#">Login</a>
                 </div>
               </li>
             </ul>
           </div>
      </nav>
    </div>
  </div>


	<div class="row">
		<div class="col-md-12">
      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

		</div>
	</div>


  <div class="row">

      <div  class="col-sm-12 col-md-6 col-lg-6 text-center" style="padding:80px;">
        <h1 class="display-4">ALGUNAS PALABRAS SOBRE</h1>
        <h1 class="display-4">GUILLERMO TORRIJOS</h1>
        <p>
            Texo textoTexo texto Texo texto Texo texto Texo texto Texo texto Texo texto
        </p>
      </div>
      <div  class="col-sm-12 col-md-6 col-lg-6 ">
        <img src="img_avatar1.png" class="float-right" style="width:100%; ">
      </div>
  </div>
  <div class="row" style="padding:100px;background-image: url('fondo.jpg');" >
    <div  class="col-sm-12  text-center" style="padding:10px;">
      <h1 style="color:white;Margin-bottom:40px;">SOME CLIENTS STORIES</h1>
    </div>
    <div  class="col-sm-12 col-md-6 col-lg-3 " style="padding:10px;">
      <div class="card" >
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Guillermo Torrijos</h4>
          <p class="card-text">Some example text some example text. you are an teacher and a peroson</p>
        </div>
      </div>
    </div>
    <div  class="col-sm-12 col-md-6 col-lg-3 " style="padding:10px;">
      <div class="card" >
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Guillermo Torrijos</h4>
          <p class="card-text">Some example text some example text. you are an teacher and a peroson</p>
        </div>
      </div>
    </div>
    <div  class="col-sm-12 col-md-6 col-lg-3" style="padding:10px;">
      <div class="card" >
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Guillermo Torrijos</h4>
          <p class="card-text">Some example text some example text. you are an teacher and a peroson</p>
        </div>
      </div>
    </div>
    <div  class="col-sm-12 col-md-6 col-lg-3" style="padding:10px;">
      <div class="card" >
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Guillermo Torrijos</h4>
          <p class="card-text">Some example text some example text. you are an teacher and a peroson</p>
        </div>
      </div>
    </div>
  </div>


</div>




    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>

  </body>
</html>
