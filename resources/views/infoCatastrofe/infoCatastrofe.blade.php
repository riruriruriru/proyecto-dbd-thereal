@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><

/*Contact sectiom*/
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
  height: 550px;
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


   <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
            <div class="section-content">
                <h1 class="section-header">Infomración de la Catástrofe <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"></span></h1>
                <h3></h3>
            </div>
            <div class="contact-section">
            <div class="container">
                <form  method="POST" action="{{ route('catastrofe.store') }}">
                        {{ csrf_field() }}
                    <div class="col-md-6 form-line">
                    	<!--Para usuario normal se le muestra información-->
                    	@if($datos->id_tipo_usuario===4)
                    	<!-- Text input-->
						<div class="col-md-6 form-line">

						<div class="form-group">
						  <label for="textinput">Nombre Catastrofe</label>  
						  <input id="nombre" name="nombre" value="{{ $cat->nombre}}" class="form-control" readonly="readonly" required="" type="text">
						</div>

						<!-- Select Basic -->
						<div class="form-group">
						  <label for="selectbasic">Seleccionar Tipo</label>
						  @if($cat->tipo_catastrofe === 1)
						    <input id="lugar_catastrofe" name="lugar_catastrofe"  value="Incendio" class="form-control" readonly="readonly" required="" type="text">
						    @elseif($cat->tipo_catastrofe === 2)
						     <input id="lugar_catastrofe" name="lugar_catastrofe"  value="Inundacion" class="form-control" readonly="readonly" required="" type="text">
						    @endif
						 
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Lugar">Lugar</label> 
						  <input id="lugar_catastrofe" name="lugar_catastrofe"  value="{{$cat->lugar_catastrofe}}" class="form-control" readonly="readonly" required="" type="text">

						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Latitud">Latitud</label> 
						  <input id="latitud" name="latitud" value ="{{$cat->latitud}}" class="form-control" readonly="readonly" required="" type="text">

						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Longitud">Longitud</label> 
						  <input id="longitud" name="longitud"  value="{{$cat->longitud}}" class="form-control" readonly="readonly" required="" type="text">

						</div>


						<!-- Textarea -->
						</div>
						<div class="col-md-6">

						<!-- Text input-->
						<div class="form-group">
						  <label for="FechaInicio">Fecha Inicio</label>  
						 
						  <input id="fecha_inicio" name="fecha_inicio" value="{{$cat->fecha_inicio}}" class="form-control" readonly="readonly" required="" type="date"> 
						</div>


						@if($cat->fecha_termino != "")
						<div class="form-group">
						  <label for="FechaTerminp">Fecha Termino</label>  
						 
						  <input id="fecha_termino" name="fecha_termino" value="{{$cat->fecha_termino}}" class="form-control" readonly="readonly" type="date"> 
						</div>
						@endif



						<div class="form-group">
						  <label  for="Descripcion">Descripcion</label>  
						  
						  <input id="descripcion" name="descripcion" value="{{$cat->descripcion}}"  class="form-control" readonly="readonly" type="text">

						  
						 
						</div>


                        @endif

                    	@if($datos->id_tipo_usuario===3 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===1)
                        
						<!-- Text input-->
						<div class="col-md-6 form-line">

						<div class="form-group">
						  <label for="textinput">Nombre Catastrofe</label>  
						  <input id="nombre" name="nombre" value="{{ $cat->nombre}}" class="form-control" required="" type="text">
						</div>

						<!-- Select Basic -->
						<div class="form-group">
						  <label for="selectbasic">Seleccionar Tipo</label>
						    <select id="tipo_catastrofe" name="tipo_catastrofe" value= "{{$cat->tipo_catastrofe}}" class="form-control">
						      <option value="1">Incendio</option>
						      <option value="2">Inundacion</option>
						    </select>
						 
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Lugar">Lugar</label> 
						  <input id="lugar_catastrofe" name="lugar_catastrofe"  value="{{$cat->lugar_catastrofe}}" class="form-control" required="" type="text">

						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Latitud">Latitud</label> 
						  <input id="latitud" name="latitud" value ="{{$cat->latitud}}" class="form-control" required="" type="text">

						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label  for="Longitud">Longitud</label> 
						  <input id="longitud" name="longitud"  value="{{$cat->longitud}}" class="form-control" required="" type="text">

						</div>


						<!-- Textarea -->
						</div>
						<div class="col-md-6">

						<!-- Text input-->
						<div class="form-group">
						  <label for="FechaInicio">Fecha Inicio</label>  
						 
						  <input id="fecha_inicio" name="fecha_inicio" value="{{$cat->fecha_inicio}}" class="form-control" required="" type="date"> 
						</div>


						<div class="form-group">
						  <label for="FechaTerminp">Fecha Termino</label>  
						 
						  <input id="fecha_termino" name="fecha_termino" value="{{$cat->fecha_termino}}" class="form-control" type="date"> 
						</div>



						<div class="form-group">
						  <label  for="Descripcion">Descripcion</label>  
						  
						  <input id="descripcion" name="descripcion" value="{{$cat->descripcion}}"  class="form-control" type="text">

						  
						 
						</div>

						<!-- Button -->
						<div class="form-group">
						  
						    <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Actualizar</button>

						</div>
						</div>
						</form>
						</fieldset>
						</form>
						</div>
						</div>
						</div>
						</section>
                        @endif

                    </div>
                </form>
            </div>
        </section>


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
    <div id="map"></div>
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


@endsection('content')