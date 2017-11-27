 @extends('layouts.app')
<!DOCTYPE html><html lang="en">
<head>
<style type="text/css">
.carousel {
   
    overflow: hidden;
}
.carousel .item {
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -ms-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
}
.carousel .active.left, .carousel .active.right {
    left:0;
    opacity:0;
    z-index:2;
}
.carousel .next, .carousel .prev {
    left:0;
    opacity:1;
    z-index:1;
}
.item:nth-child(1) {
  background: darkred;
}

.item:nth-child(2) {
  background: red;
}

.item:nth-child(3) {
  background: orange;
}

.custom {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  color: #080808;
}
.custom-title {
  margin-bottom: 0.75rem;
}

</style>

<script type="text/javascript">
     $(document).ready(function() {
    $('.carousel').carousel({interval: 2000});
    });
</script>


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
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-160x160.png')}}" sizes="160x160">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-32x32.png')}}" sizes="32x32">
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
    <div class="hero__content" style="padding-top: 40px;"> 
        <!-- Blog Entries Column -->
        <div class=container>
        	<div class="row">
        <div class="col-md-8">

          <h1 class="my-4">Noticias
            <small>Actualmente en Chile</small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" width="750px" height="300px" src="content/asteroides.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Gran Catastrofe</h2>
              <p class="card-text">Pata ciclismo en la patagonia deja a la isla de chiloe sin acceso al continente</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on Noviembre 27, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

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

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header" style="padding-top: 40px;">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Buscar!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="/verCatastrofe">Catastrofes</a>
                    </li>
                    <li>
                      <a href="/verMedida">Medidas</a>
                    </li>
                    <li>
                      <a href="#">Has tu donación</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">¿Quieres ser Voluntario?</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
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
