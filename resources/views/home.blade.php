@extends('layouts.app')
@section('styles')
@parent
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movidos por chile - Proyecto dbd (TITULO)</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Barrita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Algo debe ir aca asdasd</h1>
        <p class="lead">ASD A S D ASD A D A DD DDDDDDDD</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Aca poner</h2>
            <p class="lead">Coloques aqui</p>
            <ul>
              <li>algo 1</li>
              <li>ALGO2</li>
              <li>Balgo3</li>
              <li>algo 4</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Aca otra cosa</h2>
            <p class="lead">pium pium pium.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Masisi</h2>
            <div class="panel panel-default">
                <div class="panel-heading">MasisiSuper 8</div>
                <div class="panel-body">
                    <table class="responsive">
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Email</td>
                        </tr>
                         @foreach ($usuarios as $usuario)
                         <tr>
                            <td>{{$usuario->id}} </td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->num_tarjeta}}</td>
                         </tr>
                         @endforeach
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Pie de pagina &copy; algo aca adicional</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>

</style>

