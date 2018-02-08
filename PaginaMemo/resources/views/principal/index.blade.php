@extends('layouts.plantillaIndex')
@section('title','Memo Torrijos')

@section('content')

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

@endsection
