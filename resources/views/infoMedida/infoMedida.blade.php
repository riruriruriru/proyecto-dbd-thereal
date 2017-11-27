@extends('layouts.app')

@include('flash::message') 
@section('styles')
    @parent
    <style>
/*Font-awesome integration*/
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
/*Google font integration*/
@import url('https://fonts.googleapis.com/css?family=Roboto');

#contact{
    background-color:#f1f1f1;
    font-family: 'Roboto', sans-serif;
}

#contact .well{
    margin-top:20px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    } 
}



/* progreso medidas en catastrofe*/
.progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}



.container {
    
    width: 100%;
    height: 100%;
    background-color: #d4d3d3;
    padding: 20px;
    
}

.listWrap {
    
    height: 800px;
    width: 1000px;
    
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
    
    background-color: #201c2b;
    text-transform: uppercase;
    font-size: 8pt;
    font-weight: bold;
    color: #b8b5c0;

    
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





/*tabla 2*/

.container {
    
    width: 100%;
    height: 100%;
    background-color: #d4d3d3;
    padding: 20px;
    
}

.listWrap {
    
    height: 800px;
    width: 1000px;
    
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
    
    background-color: #201c2b;
    text-transform: uppercase;
    font-size: 8pt;
    font-weight: bold;
    color: #b8b5c0;

    
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







@section('content')



<div class="container">
  <div class="panel-body">
  <div class="row">
    
      <form class="form-horizontal" method="POST" action="{{ route('medida.store') }}" >
        {{ csrf_field() }}
      <div class="col-md-5">
          <h4><strong>Información Medida </strong></h4>
       
        <!-- Text input-->
          <div class="col-md-6 form-line">

          <div class="form-group">
            <label for="textinput">Nombre Medida</label>  
            <input id="nombre_medida" name="nombre_medida" value="{{$medida->nombre_medida}}" placeholder="Nombre" class="form-control" required="" type="text">
          </div>

<!-- Text input-->
          <div class="col-md-6 form-line">

          <div class="form-group"> 
            <input id="id_catastrofe_medidas" name="id_catastrofe_medidas" placeholder="Nombre" class="form-control" required="" value={{$catastrofe}} type="hidden">
          </div>

          <!-- combox-->

          <!-- Select Basic -->
          @if($datos->id_tipo_usuario!=4)
          <div class="form-group">
            <label  for="selectbasic">Select Basic</label>
           
              <select id="id_organizacion_medidas" name="id_organizacion_medidas" value="{{$medida->id_organizacion_medidas}}" class="form-control">
                @foreach($organizaciones as $organizacion)
    <option value="{{ $organizacion->id }}" @if(old('organizacion')&&old('organizacion')== $organizacion->id) selected='selected' @endif >{{ $organizacion->name}}</option>
@endforeach
              </select>
            
          </div>
          @elseif($datos->id_tipo_usuario===4)
           <div class="form-group">
            <input type="text" class="form-control" name="organizacion" value="{{$org}}" placeholder="Organizacion">
          </div>

          @endif

          <div class="form-group">
            <input type="date" class="form-control" name="fecha_inicio_medida" value="{{$medida->fecha_inicio_medida}}" placeholder="Fecha de Inicio">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="fecha_termino_medida" value="{{$medida->fecha_termino_medida}}" placeholder="Fecha de Término">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="descripcion" value="{{$medida->descripcion}}" placeholder="Comentario">
          </div>
 @if($datos->id_tipo_usuario!=4)
          <div class="form-group">
          <button class="btn btn-default"  name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Aceptar
          </button>
     
          </div>
@endif
      </div>
          </form>
        

</div>
</div>
</div>






<!--Tabla Centros de Acopio-->
<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>ID</span>
                <span>Nombre de Centro de Acopio</span>
                <span>Acciones</span>
                <span></span>
            </li>
            @foreach($centroAcop as $centroAcopio)
            <li>
                <span id="id_acopio">{{$centroAcopio->id_acopio}}</span>
                <span>{{$centroAcopio->nombre}}</span>
                <span>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                        <button type="button" class="btn btn-default">Edit</button>
                        <button type="button" class="btn btn-default" disabled>Delete</button>
                    </div>
                </span>
                <span></span>
            </li>
           @endforeach




            <li>

            </li>
        </ul>

    </div>

</div>

<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous"></script>




<!--Tabla Eventos-->


<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>ID</span>
                <span>Nombre Evento</span>
                <span>Cantidad de Voluntarios</span>
                <span>Voluntarios Actuales</span>
                <span>Monto Recaudado</span>
                <span>Monto Objetivo</span>
                <span>Acciones</span>
                <span></span>
            </li>
             @foreach($eventos as $evento)
            <li>
                <spanid id="id_evento">{{$evento->id_evento}}</span>
                
                <span>{{$evento->cantidad_voluntarios}}</span>
                <span>{{$evento->voluntarios_actuales}}</span>
                <span>{{$evento->monto_recaudado}}</span>
                <span>{{$evento->monto_objetivo}}</span>
                <span>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                        <button type="button" class="btn btn-default">Edit</button>
                        <button type="button" class="btn btn-default" disabled>Delete</button>
                    </div>
                </span>
                <span></span>
            </li>
            @endforeach
            
            <li>

            </li>
        </ul>

    </div>

</div>

<!--Tabla donaciones-->


<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>ID</span>
                <span>Nombre Donacion</span>
                <span>Fecha Inicio</span>
                <span>Fecha Termino</span>
                <span>Monto Recaudado</span>
                <span>Monto Objetivo</span>
                <span>Acciones</span>
                <span></span>
            </li>
             @foreach($donaciones as $donacion)
            <li>
                <spanid id="id_evento">{{$donacion->id_donacion}}</span>
                <span>{{$donacion->nombre}}</span>
                <span>{{$donacion->fecha_inicio}}</span>
                <span>{{$donacion->fecha_termino}}</span>
                <span>{{$donacion->monto_actual}}</span>
                <span>{{$donacion->objetivo}}</span>
                <span>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                        <button type="button" class="btn btn-default" disabled>Delete</button>
                        <li><a href="/verDonaciones/{{$donacion->id_donacion}}"  type="button" class="btn btn-default"><a href="/verDonaciones/{{$donacion->id_donacion}}">Donar</a></li> 
                    </div>
                </span>
                <span></span>
            </li>
            @endforeach
            
            <li>

            </li>
        </ul>

    </div>

</div>


<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous"></script>













        </form>
      </div>
    </div>
  </div>

    </body>
</html>

