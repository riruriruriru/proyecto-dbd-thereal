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

@endsection('content')