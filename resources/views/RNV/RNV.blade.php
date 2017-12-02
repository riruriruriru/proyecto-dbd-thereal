@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><


.container {
    
    width: 100%;
    height: 100%;
    background-color: #d4d3d3;
    padding: 20px;
    
}

.listWrap {
    
    height: auto;
    width: auto;
    padding-top: 50px;
    
}

.list {
    
    list-style: none;
    margin: 0;
    padding: 0;
    display: table;
    white-space: nowrap;
    width: 100%;
    
}

.list li {
    
    background-color: #f0f0f0;
    display: table-row;
    color: #5c5c5c;

}

.list li:nth-child(odd) {
    
    background-color: #f2f2f2;
    display: table-row;
    font-size: 9pt;
    color: #5c5c5c;

}

.list li:nth-child(odd):hover {
    
    background-color: #dadada;

}

.list li:nth-child(even) {
    
    background-color: #e8e8e8;
    display: table-row;
    font-size: 9pt;
    color: #5c5c5c;

}

.list li:nth-child(even):hover {
    
    background-color: #dadada;

}

.list li:nth-child(1) span:first-child {
    
    border-top-left-radius: 6px;
    
}

.list li:nth-child(1) span:last-child {
    
    border-top-right-radius: 6px;
    
}


.list li:nth-child(1) {
    
    background-color: #000;
    text-transform: uppercase;
    font-size: 10pt;
    font-weight: bold;
    color: #fff;

    
}

.list li:nth-child(1):hover {
    

    
}



.list li:nth-child(1) span {
    
    border-bottom: 2px solid #7d5bbe;
    padding: 14px;
    
}

.list span {
    
    text-align: left;
    display: table-cell;
    padding: 6px;
    vertical-align: middle;
    
}


.list span:nth-child(2) {
    
    
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



@section('content')
<body style=" padding-top: 50px; color: #fff">


    <div id="start" class="start">&nbsp;</div>
    <div class="maxwidth1050">&nbsp;</div>

    <div class="form-group" style = "  position:  relative;margin-left: 350px;">

            <div class="col-md-3">
                
            </div>
            <div class="form-group">
              <input id="id_usuario_activo" name="id_usuario_activo" type="hidden" placeholder="placeholder" value={{$id_usuario_activo}} class="form-control input-md">
            </div>

        
            <div class="col-md-3">
            <div class="form-group">
               <li><a href="/registroRNV"   class="hero__button  ghost-button  ghost-button--hero">Registrarse</a></li>
            </div>
            </div>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        </div>

    <section id="hero" class="hero">
        <div class="orga__background">&nbsp;</div>
        <div class="hero__gradient">&nbsp;</div>
    </section>
        <div class="hero__content" style="padding-top: 50px;"> 
        <form class="form-horizontal" method="GET">

        <fieldset>

        <div class="container" style="padding-top: 50px">
             <div class="col-md-3">
                        </div>
             <div class="col-md-50">
                        
            <div class="listWrap">
       
                <ul class="list">
                        
                    <li>
                        <span>ID</span>
                        <span>Nombre de Usuario</span>
                        <span>Acción</span>
                        <span></span>
                    </li>
                
        				<?php $i=0 ?>
                    	@foreach($usuarios as $usuario)
                    	<?php $i++ ?>
                        <span style="font-size: 20px" id="id">{{$i}}</span>
                        <span style="font-size: 20px">{{$usuario->name}}</span>

                        <span>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button href=""  type="button" class="btn btn-default"><a href="">Editar</a></button>
                                <button type="button" class="btn btn-default" disabled>Eliminar</button>
                             
                            </div>
                        </span>

                 
                        <li></li>
                          
                        @endforeach
                       
                </ul>

            </div>
        </div>
    </div>
        </fieldset>

        </form>
      
        
    </div>
</body>
</html>
<?php
        $dato = Session::get('flash');
        if ($dato != ''){
            echo "<script>alert('";
            echo $dato;
            echo "')";
            echo "</script>";
          
        }
?>
