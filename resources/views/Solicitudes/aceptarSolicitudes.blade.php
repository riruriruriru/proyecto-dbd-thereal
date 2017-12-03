@extends('layouts.app')
@include('flash::message') 


@section('content')

<head>
  <meta charset="UTF-8">
  <title>Fixed table header</title>
  
</head>

<body>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


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
                            
                            <li><a href="/infoMedida/{{$medida->id_medidas}}"  type="button" class="btn btn-default">Ver Solicitud</a></li> 
                            <th> 
                            <li><a href="/infoMedida/{{$medida->id_medidas}}"  type="button" class="btn btn-default">Ver Solicitud</a></li>
                        <form  method="POST" action="{{ route('solicitudM.update') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input id="id_medidas" type="hidden" class="form-control" name="id_medidas" value= "{{$medida->id_medidas}}" >
                        </div>
                        <div class="form-group">
                            <input id="verificador" type="bool" class="form-control" name="verificador" value= "1" style = "display: none">
                        </div>
  
                     <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Validar</button>
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
                             <li><a href="/verEvento/{{$evento->id_evento}}"  type="button" class="btn btn-default">Ver Solicitud</a></li> <th>
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
        </form>
</section>



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
                            <th> <li><a href="/verCentroAcopio/{{$centroAcopio->id_acopio}}"  type="button" class="btn btn-default">Modificar Centro</a></li>
                           
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
                            <th> <li><a href="/verSolicitud/{{$usuario->id}}"  type="button" class="btn btn-default">Ver Solicitud</a></li> <th>
                            <th> 
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
        }
?>

@endsection('content')