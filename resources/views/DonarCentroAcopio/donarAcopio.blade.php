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
  height: px;
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


    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
/*Google font integration*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
      #map {
        height: 90%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 90%;
        margin: 0;
        padding: 0;
      }

      .controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}
#target {
  width: 345px;
}
</style>


 

<body>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 <div id="map" style="top: 50px"></div>
    <script>
      function initMap() {
        var jposLat = "<?php echo (float)$latitud; ?>";
        var jposLong = "<?php echo (float)$longitud; ?>";
        var myLatLng = {lat: -25.363, lng: 131.044};
        var latlong = new google.maps.LatLng(jposLat,jposLong);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
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

<section id="contact">

<div class="container">




<div class="section-content">
        <h1 class="section-header">Donacion <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> en Centro de Acopio</span></h1>
        <h3></h3>
</div>
<div class="contact-section">
<div class="container">
  
<form  method="POST" action="{{ route('donar.Acopio') }}">
                        {{ csrf_field() }}
<fieldset>

<!-- Text input-->
<div class="col-md-6 form-line">
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCVLEuprSyELEb_mOgivlT-hxuC5IbMVOk&callback=initialize"></script> 
<div class="form-group">
  <label for="textinput">Nombre Acopio</label>  
  <input id="nombre_acopio" name="nombre_acopio" placeholder="Nombre" class="form-control" required="" type="text" readonly="readonly" value="{{$acopio->nombre}}">
</div>

<div class="form-group">
  <label for="textinput">Tipo Bien</label>  
  <input id="nombre_acopio" name="nombre_acopio" placeholder="Nombre" class="form-control" required="" type="text" readonly="readonly" value="{{$acopio->tipo_bien}}">
</div>
<!-- Select Basic -->


<!-- Text input-->



<!-- Text input-->
<div class="form-group">
   <label for="textinput">Lugar Acopio</label>  

  <input id="lugar_catastrofe" name="lugar_catastrofe"  placeholder="Lugar" class="form-control" required="" value= '{{$acopio->direccion}}' type="text" readonly="readonly" >

</div>

<!-- Text input-->
<div class="form-group">

  <input id="id_acopio" name="id_acopio"  placeholder="Lugar" class="form-control" required="" value= '{{$acopio->id_acopio}}' type="hidden" readonly="readonly" >

</div>

<!-- Text input-->
<!-- Text input-->
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="FechaInicio">Monto Actual</label>  
 
  <input id="monto_actual" name="monto_actual" placeholder="" class="form-control" required="" type="text" readonly="readonly" value="{{$acopio->monto_actual}}"> 
</div>
<div class="form-group">
  <label for="cantidad_objetivo">Monto Objetivo</label>  
 
  <input id="cantidad_objetivo" name="cantidad_objetivo" placeholder="" class="form-control" required="" type="text" readonly="readonly" value="{{$acopio->cantidad_objetivo}}"> 
</div>
<!-- Textarea -->

<div class="form-group">
  <label  for="monto_donacion">Donacion</label>  
  
  <input id="monto_donacion" name="monto_donacion" placeholder="Descripcion" class="form-control" type="number" >

  
 
</div>

<!-- Button -->
<div class="form-group">
  
    <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Agregar</button>

</div>
</div>
</form>
</fieldset>
</form>
</div>
</div>
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
            header('Refresh: 0.01; URL=/verMedida');
        }
?>
