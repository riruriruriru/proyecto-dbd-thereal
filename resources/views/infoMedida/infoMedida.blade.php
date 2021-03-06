@extends('layouts.app')
@include('flash::message') 
@section('styles')
    @parent
    <style type="text/css"><
    .content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 150px;
  width: 100%;
  width: 100vw;
  height: 50vw;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}
</style>


@stop

@section('content')



<section id="contact" style = "margin-left: 0px; margin-bottom: 0px;" >
  
    <div class="container">
        <div class="section-content">
            <h1 class="section-header">Información <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Medida</span></h1>
            <h3></h3>
        </div>
          
        <div class="contact-section" >
            <div class="container">
   
           
                <form method="POST" action="{{ route('medida.update') }}">
                        {{ csrf_field() }}
                    <div class="col-md-6 form-line">


                        <div class="form-group">
                            
                            <input id="id_medida" type="hidden" class="form-control" name="id_medida" value="{{ $medida->id_medidas }}" required autofocus>
                            
                        </div>
                        <div class="form-group">
                            <label for="nombre_medida">Nombre medida</label>
                          
                            <input id="nombre_medida" type="text" class="form-control" name="nombre_medida" value="{{ $medida->nombre_medida }}" required autofocus>

                          
                        </div>

                        <div class="form-group">
                            <label for="descripción">Descripción</label>
                            <input id="descripción" type="text" class="form-control" name="descripcion" value="{{ $medida->descripcion }}" required autofocus>
                            
                        </div>

                   
                           </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha_inicio_medida">Fecha inicio</label>
                            <input id="fecha_inicio_medida" type="date" class="form-control" name="fecha_inicio_medida" value="{{$medida->fecha_inicio_medida}}" required autofocus>
                            
                        </div>
                     
                        <div class="form-group">
                            <label for="fecha_termino">Fecha termino</label>

                            
                            <input id="fecha_termino_medida" type="date" class="form-control" name="fecha_termino_medida" value="{{$medida->fecha_termino_medida}}" required>

                            
                        </div>
                    
                        @if($datos->id_tipo_usuario ==1)
                        <div class="form-group">
                            
                             <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Actualizar</button>
                        </div>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

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
                            @if($datos->id_tipo_usuario!=4)
                            <div class="btn-group btn-group-xs" style="width: 100px;" role="group" aria-label="...">
                                
                                
                                <a  style=" width: 150px;text-transform: none;" href="/verEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Modificar Evento</a>
                            </div>
                            <div class="btn-group btn-group-xs" style="width: 100px;" role="group" aria-label="...">
                                <a style=" width: 150px; text-transform: none;" href="/agregarActividadEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Agregar Actividad</a>
                                </div>
                                @endif
                            <div class="btn-group btn-group-xs" style="width: 100px;" role="group" aria-label="...">
                                <a style="width: 150px; text-transform: none;" href="/inscribirseEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Inscribirse</a>
                            </div>

                                @if($datos->id_tipo_usuario ==1 or $datos->id_tipo_usuario ==2 )
                                <form  method="POST" action="{{ route('borrarEvento') }}">
                                                         {{ csrf_field() }}
                                    <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    <input id="id_evento" type="hidden" class="form-control" name="id_evento" value= "{{$evento->id_evento}}" >
                                    <button style="width: 150px;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                </div>
                                    
                                </form>
                                @endif

                            </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
</section>
 <section >
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
                            
                                @if($datos->id_tipo_usuario!=4)
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                <a style="width: 150px; text-transform: none;" href="/agregarTrabajoVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Agregar Trabajo</a>
                            </div>
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                <a style="width: 150px; text-transform: none;" href="/verVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Modificar Voluntariado</a>
                            </div>
                                @endif
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                <a style="width: 150px; text-transform: none;" href="/inscribirseVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Inscribirse</a>
                            </div>

                                @if($datos->id_tipo_usuario ==1 or $datos->id_tipo_usuario ==2 )
                                <form  method="POST" action="{{ route('borrarVoluntariado') }}">
                                                         {{ csrf_field() }}
                                <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                    <input id="id_voluntariado" type="hidden" class="form-control" name="id_voluntariado" value= "{{$voluntariado->id_voluntariado}}" >
                                    <button style="width: 150px; text-transform: none;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                </div>
                                    
                                </form>
                                @endif

                            </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>


    </section>


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
                     @foreach($centroAcop as $centroAcopio)
                        <tr>
                            <th id="id_evento">{{$centroAcopio->id_acopio}}</th>
                            <th>{{$centroAcopio->nombre}}</th>
                            <th> 
                           
                                @if($datos->id_tipo_usuario!=4)
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                <a style="width: 150px; text-transform: none;" href="/verCentroAcopio/{{$centroAcopio->id_acopio}}"  type="button" class="btn btn-default">Modificar Centro</a>
                            </div>
                                @endif
                            <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                    <a style="width: 150px; text-transform: none;" href="/donarAcopio/{{$centroAcopio->id_acopio}}"  type="button" class="btn btn-default">Donar</a>
                            </div>

                            @if($datos->id_tipo_usuario ==1 or $datos->id_tipo_usuario ==2 )
                                <form  method="POST" action="{{ route('borrarCentroAcopio') }}">
                                                         {{ csrf_field() }}
                                   
                                    <input id="id_acopio" type="hidden" class="form-control" name="id_acopio" value= "{{$centroAcopio->id_acopio}}" >
                                <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 200px;">
                                    <button style="width: 150px;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                </div>
                                    
                                </form>
                            @endif

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
                            <th id="id_evento">{{$donacion->id_donacion}}</th>
                            <th>{{$donacion->nombre}}</th>
                            <th>{{$donacion->fecha_inicio}}</th>
                            <th>{{$donacion->fecha_termino}}</th>
                            <th>{{$donacion->monto_actual}}</th>
                            <th>{{$donacion->objetivo}}</th>
                            <th>                           
                                <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 150px;">
                                    <a style="width: 150px; text-transform: none;" href="/verDonaciones/{{$donacion->id_donacion}}"  type="button" class="btn btn-default">Donar</a>
                                </div> 
                                    @if($datos->id_tipo_usuario != 4)
                                <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 150px;">
                                    <a style="width: 150px; text-transform: none; " href="/modificarDonaciones/{{$donacion->id_donacion}}"  type="button" class="btn btn-default">Modificar Donacion</a> 
                                </div>
                                    @endif
                              

                                @if($datos->id_tipo_usuario ==1 or $datos->id_tipo_usuario ==2 )
                                <form  method="POST" action="{{ route('borrarDonacion') }}">
                                                         {{ csrf_field() }}
                                    
                                    <input id="id_donacion" type="hidden" class="form-control" name="id_donacion" value= "{{$donacion->id_donacion}}" >
                                <div class="btn-group btn-group-xs" role="group" aria-label="..." style="width: 150px;">
                                    <button style="width: 150px;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                </div>
                                    
                                </form>
                                @endif
                            </th>
                        </tr>
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
            header('Refresh');
        }
?>

@endsection('content')
  