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
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 450px;
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

<head>
  <meta charset="UTF-8">
  <title>Fixed table header</title>
  
</head>

<section id="contact" style = "margin-left: 0px; margin-bottom: 0px;" >
  
    <div class="container">
        <div class="section-content">
            <h1 class="section-header">Registro <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Usuario</span></h1>
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

                   

                        <div class="form-group">
                            <label for="fecha_inicio_medida">Fecha inicio</label>
                            <input id="fecha_inicio_medida" type="date" class="form-control" name="fecha_inicio_medida" value="{{$medida->fecha_inicio_medida}}" required autofocus>
                            
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha_termino">Fecha termino</label>

                            
                            <input id="fecha_termino_medida" type="date" class="form-control" name="fecha_termino_medida" value="{{$medida->fecha_termino_medida}}" required>

                            
                        </div>
                    

                        <div class="form-group">
                            
                             <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Aceptar</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<body>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">






<form method="GET" style="border-top-width: 50px;border-top-style: solid;">
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
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Edit</button>
                                @if($datos->id_tipo_usuario!=4)
                                <li><a href="/agregarActividadEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Agregar Actividad</a></li>
                                @endif
                                <li><a href="/inscribirseEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Inscribirse Evento</a></li>

                            </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>

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
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Edit</button>
                                @if($datos->id_tipo_usuario!=4)
                                <li><a href="/agregarTrabajoVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Agregar Trabajo</a></li>
                                @endif
                                <li><a href="/inscribirseVoluntariado/{{$voluntariado->id_voluntariado}}"  type="button" class="btn btn-default">Inscribirse Voluntariado</a></li>

                            </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>


    </section>
</form>
<form method="GET">
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
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Edit</button>
                                <button type="button" class="btn btn-default" disabled>Delete</button>
                                    <li><a href="/donarAcopio/{{$centroAcopio->id_acopio}}"  type="button" class="btn btn-default">Donar</a></li>
                            </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>



    </section>
</form>

</form>
<form method="GET">
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
                                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default" disabled>Delete</button>
                                    <li><a href="/verDonaciones/{{$donacion->id_donacion}}"  type="button" class="btn btn-default">Donar</a></li> 
                                </div>
                            </th>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>



    </section>
</form>


</body>

<?php
        $dato = Session::get('flash');
        if ($dato != ''){
            echo "<script>alert('";
            echo $dato;
            echo "')";
            echo "</script>";
            header('Refresh: 0.01');
        }
?>

@endsection('content')
  