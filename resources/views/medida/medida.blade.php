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



    </style>
@stop
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 70%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map" style="top: 50px"></div>
    <script>

      function initMap() {
        var jposLat = "<?php echo (float)$latitud; ?>";
        var jposLong = "<?php echo (float)$longitud; ?>";
        var myLatLng = {lat: -25.363, lng: 131.044};
        var latlong = new google.maps.LatLng(jposLat,jposLong);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: latlong
        });

        var marker = new google.maps.Marker({
          position: latlong,
          map: map,
          title: 'Origen Catastrofe'
        });
      
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVLEuprSyELEb_mOgivlT-hxuC5IbMVOk&callback=initMap">
    </script>



<div class="container">
  <div class="panel-body">
  <div class="row">
    
      <form class="form-horizontal" method="POST" action="{{ route('medida.store') }}" >
        {{ csrf_field() }}
      <div class="col-md-5">
          <h4><strong>Ingresar Medidas</strong></h4>
       
        <!-- Text input-->
          <div class="col-md-6 form-line">

          <div class="form-group">
            <label for="textinput">Nombre Medida</label>  
            <input id="nombre_medida" name="nombre_medida" placeholder="Nombre" class="form-control" required="" type="text">
          </div>

<!-- Text input-->
          <div class="col-md-6 form-line">

          <div class="form-group"> 
            <input id="id_catastrofe_medidas" name="id_catastrofe_medidas" placeholder="Nombre" class="form-control" required="" value={{$catastrofe}} type="hidden">
          </div>

          <!-- combox-->

          <!-- Select Basic -->
          <div class="form-group">
            <label  for="selectbasic">Select Basic</label>
           
              <select id="id_organizacion_medidas" name="id_organizacion_medidas" class="form-control">
                @foreach($organizaciones as $organizacion)
    <option value="{{ $organizacion->id }}" @if(old('organizacion')&&old('organizacion')== $organizacion->id) selected='selected' @endif >{{ $organizacion->name}}</option>
@endforeach
              </select>
            
          </div>

          <div class="form-group">
            <input type="date" class="form-control" name="fecha_inicio_medida" value="" placeholder="Fecha de Inicio">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="fecha_termino_medida" value="" placeholder="Fecha de Término">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="descripcion" value="" placeholder="Comentario">
          </div>

          <div class="form-group">
          <button class="btn btn-default"  name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Aceptar
          </button>
     
          </div>
      </div>
          </form>
        

</div>
</div>
</div>



        </form>
      </div>
    </div>
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
            header('Refresh: 0.01; URL=/verMedida');
        }
?>
