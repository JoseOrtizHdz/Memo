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
  <div id="app">
      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:rgb(144, 10, 22)">
        <div class="container">
       <!-- Brand -->
       <a class="navbar-brand"  href="{{ url('/') }}">Memo Torrijos</a>
       <div class="navbar-header">

                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              	&#9776;
              	</button>
                <!--<a class="navbar-brand" href="#">Inicio</a>-->
      </div>
      <div class="collapse navbar-collapse justify-content-end " id="bs-example-navbar-collapse-1">
             <!-- Links -->
             <ul class="navbar-nav ">
               <li class="nav-item">
                 <a class="nav-link" href="{{ url('/quiensoy') }}">¿Quien soy?</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="{{ url('/cursos') }}">Cursos</a>
               </li>
               <!-- Dropdown -->
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                   Sesion
                 </a>
                 <div class="dropdown-menu">
                   <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                 </div>
               </li>
             </ul>
           </div>
         </div>
      </nav>

    @yield('content')
</div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>

  </body>
</html>
