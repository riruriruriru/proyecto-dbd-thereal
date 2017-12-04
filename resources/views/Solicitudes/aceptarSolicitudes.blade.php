@extends('layouts.app')
@include('flash::message') 


@section('content')

<head>
  <meta charset="UTF-8">
 
  
</head>

<body>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


    <div id="start" class="start">&nbsp;</div>
    <div class="maxwidth1050">&nbsp;</div>

    <section id="hero" class="hero" style="margin-left: 0px;">
        <div class="orga__background">&nbsp;</div>
        <div class="hero__gradient">&nbsp;</div>
    </section>
     <section style="top :50px;">
        <h1>Tabla Medidas</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre medida</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($medidas as $medida)
                        <tr>
                            <th id="id_medidas">{{$medida->id_medidas}}</th>
                            <th>{{$medida->nombre_medida}}</th>
                            <th>

                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                            <a href="/infoMedida/{{$medida->id_medidas}}"  type="button" class="btn btn-default">Ver Solicitud</a>
                      
                        <form  method="POST" action="{{ route('solicitudM.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_medidas" type="hidden" class="form-control" name="id_medidas" value= "{{$medida->id_medidas}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                     <button id="Submit" name="Submit" class="btn btn-default">Validar</button>
                    </div>
                        </form>

                        </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section >
        <h1>Tabla evento</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0" style="top :50px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Evento</th>
                        <th>Cantidad de Voluntarios</th>
                        <th>Voluntarios Actuales</th>
                        <th>Monto Recaudado</th>
                        <th>Monto objetivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($eventos as $evento)
                        <tr>
                            <th id="id_evento">{{$evento->id_evento}}</th>
                            <th>{{$evento->nombre}}</th>
                            <th>{{$evento->cantidad_voluntarios}}</th>
                            <th>{{$evento->voluntarios_actuales}}</th>
                            <th>{{$evento->monto_recaudado}}</th>
                            <th>{{$evento->monto_objetivo}}</th>
                            <th> 
                             <a href="/verEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Ver Solicitud</a><th>
                            <th> 
                        <form  method="POST" action="{{ route('solicitudE.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_evento" type="hidden" class="form-control" name="id_evento" value= "{{$evento->id_evento}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
  
                     <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
                        </form>

                        </div>
                            

                            </div>

                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
</form>




        <h1>Tabla voluntariado</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0" style="top :50px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Voluntariado</th>
                        <th>Cantidad de Voluntarios</th>
                        <th>Voluntarios Actuales</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($voluntariados as $voluntariado)
                        <tr>
                            <th id="id_evento">{{$voluntariado->id_voluntariado}}</th>
                            <th>{{$voluntariado->nombre}}</th>
                            <th>{{$voluntariado->cantidad_voluntarios}}</th>
                            <th>{{$voluntariado->voluntarios_actuales}}</th>
                            <th> 
                             <li><a href="/verVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Ver Solicitud</a></li> <th>
                            <th> 
                        <form  method="POST" action="{{ route('solicitudV.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_voluntariado" type="hidden" class="form-control" name="id_voluntariado" value= "{{$voluntariado->id_voluntariado}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
  
                     <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
                        </form>

                        </div>
                            

                            </div>

                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>


    <section style="top :50px;">
        <h1>Tabla Centro de acopio</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Centro de Acopio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($centros as $centroAcopio)
                        <tr>
                            <th id="id_evento">{{$centroAcopio->id_acopio}}</th>
                            <th>{{$centroAcopio->nombre}}</th>
                            <th> <a href="/verCentroAcopio/{{$centroAcopio->id_acopio}}"  type="button" class="btn btn-default">Ver Solicitud</a>
                           
                            </th>
                             <th> 
                        <form  method="POST" action="{{ route('solicitudC.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_acopio" type="hidden" class="form-control" name="id_acopio" value= "{{$centroAcopio->id_acopio}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
  
                     <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
                        </form>

                        </div>
                            

                            </div>

                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>



    </section>

    <section style="top :50px;">
        <h1>Tabla Donaciones</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Donacion</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Termino</th>
                        <th>Monto Recaudado</th>
                        <th>Monto Objetivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($donaciones as $donacion)
                        <tr>
                            <th id="id_evento" name = "id_evento" >{{$donacion->id_donacion}}</th>
                            <th>{{$donacion->nombre}}</th>
                            <th>{{$donacion->fecha_inicio}}</th>
                            <th>{{$donacion->fecha_termino}}</th>
                            <th>{{$donacion->monto_actual}}</th>
                            <th>{{$donacion->objetivo}}</th>
                            <th> <li><a href="/modificarDonaciones/{{$donacion->id_donacion}}"  type="button" class="btn btn-default">Ver Solicitud</a></li></th>
                             <th> 
                        <form  method="POST" action="{{ route('solicitudD.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_donacion" type="hidden" class="form-control" name="id_donacion" value= "{{$donacion->id_donacion}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
  
                     <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
                        </form>

                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>



    </section>
</form>

    <section style="top :50px;">
        <h1>Tabla RNV</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Voluntario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($usuarios_rnv as $usuario)
                        <tr>
                            <th id="id_usuario">{{$usuario->id}}</th>
                            <th>{{$usuario->name}}</th>
                            <th> 
                                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                    <a href="/verSolicitud/{{$usuario->id}}"  type="button" class="btn btn-default">Ver Solicitud</a>
                                    <form  method="POST" action="{{ route('solicitud.update') }}">
                                    {{ csrf_field() }}
                                      <div class="form-group">
                                        <input id="id_usuario" type="hidden" class="form-control" name="id_usuario" value= "{{$usuario->id}}" >
                                    </div>
                                    <div class="form-group">
                                        <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                                    </div>
              
                                        <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
                                    </form>
                                </div>

                            </th>
                            
                        

                     @endforeach
                </tbody>
            </table>
        </div>


    </section>


</body>
<?php
        $dato = Session::get('flash');
        if ($dato != ''){
            echo "<script>alert('";
            echo $dato;
            echo "')";
            echo "</script>";
        }
?>

@endsection('content')