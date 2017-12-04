 @extends('layouts.app')
@section('styles')
    @parent
<style type="text/css">
  .boxContenedor{
    width: px;
    height: 633px;
    overflow: scroll;
  }

</style>

@stop
<!DOCTYPE html><html lang="en">
<head>

    <!-- Basic informations -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Site informations -->
    <title>MovidosxChile</title>
    <meta name="author" content="Dominik Serafin">
    <meta name="description" content="Free HTML5 Template created by Dominik Serafin.">

    <!-- Open Graph -->
    <meta property="og:title" content="Free Aurora Template">
    <meta property="og:description" content="Free HTML5 Template created by Dominik Serafin.">
    <meta property="og:url" content="http://serafin.io/aurora-template/">
    <meta property="og:image" content="http://serafin.io/aurora-template/content/og_image.png">

    <!-- Twitter Card -->
    <!--
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:domain" content="">
    <meta name="twitter:image:src" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="">
    -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('style/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('style/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('style/favicon/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('style/favicon/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('style/favicon/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('style/favicon/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('style/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('style/favicon/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('style/favicon/apple-touch-icon-76x76.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/64x64chilito.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/64x64chilito.png')}}" sizes="160x160">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/48x48chilito.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/16x16chilito.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/32x32chilito.png')}}" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="style/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="style/favicon/browserconfig.xml'">
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}">

    <!-- Fonts -->
    <link href="{{URL::asset('style/fonts/webfont-raleway/webfont-raleway.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('style/fonts/webfont-font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">

    <!-- Stylesheets -->
    <link href="{{URL::asset('style/css/global.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- Scripts preload -->
    <!--[if lt IE 9]><script src="style/js/html5shiv.js"></script><![endif]-->
</head>

<body>






    <!-- Some Helper Stuff -->
    <div id="start" class="start">&nbsp;</div>
    <div class="maxwidth1050">&nbsp;</div>







    <!-- Header -->
     
    <!-- End Header -->



    <!-- First Fixed "Hero" Section -->
    <!--HoMe de la aplicación-->

    <section id="hero" class="hero">
        <div class="orga__background">&nbsp;</div>
        <div class="hero__gradient">&nbsp;</div>
    </section>
    <div class="hero__content" style="padding-top: 50px;"> 
        <!-- Blog Entries Column -->
        <div class=container>
        	<div class="row">
        <div class="col-md-8">

          <h1 class="my-4 hero__title-small">Noticias
            <small class="hero__blanco">Actualmente en Chile</small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" style="padding-top: 40px;" width="300px" height="300px" src="content/post1-onemi.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title hero__blanco">Onemi prepara simulacro para la región de Aysén</h2>
              <p class="card-text hero__blanco">La Onemi como parte de su campaña "Chile Preparado" efectuara este 5 de diciembre un simulacro para los habitantes de la zona costera de Aysén</p>
              <a href="http://www.onemi.cl/simulacro/aysen-2017/" class="btn btn-primary">Leer Más &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on Noviembre 27, 2017 by
              <a href="#">Admin</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" style="padding-top: 40px;" width="750px" height="300px" src="content/conaf-post.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title hero__blanco">CONAF controla 76 incendios forestales </h2>
              <p class="card-text hero__blanco">La Corporación Nacional Forestal, CONAF, actualmente combate 110 incendios forestales de los cuales 23 son de gran magnitud, con un comportamiento extremo y de alta severidad.</p>
              <a href="http://www.altoincendios.cl/conaf-controla-76-incendios-forestales/" class="btn btn-primary">Leer Más &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on Noviembre 27, 2017 by Admin
            </div>
          </div>

          <!-- Blog Post -->

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget >
          <div class="card my-4">
            <h5 class="card-header hero__blanco" style="padding-top: 40px;">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Buscar</button>
                </span>
              </div>
            </div>
          </div -->

          <!-- Categories Widget -->
          <div class="boxContenedor" style="padding-top: 40px;">
            <a class="twitter-timeline" href="https://twitter.com/onemichile?lang=es">Onemi</a> 
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

       
            </div>
          </div>

          <!-- Side Widget 
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>-->

        </div>

      </div>
      <!-- /.row -->
      </div>
    </div>
    

    
    <!-- End First Fixed "Hero" Section -->





        <!-- "Contact" Section -->
       
        <!-- End "Contact" Section -->

        <!-- Footer -->
   

    

    <script src="{{URL::asset('style/js/dependencies.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('style/js/global.js')}}" type="text/javascript"></script>

</body>
</html>
