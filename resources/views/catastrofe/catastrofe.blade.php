@extends('layouts.app')
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
@section('content')

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<section id="contact">

<div class="container">

 <div class="section-content">
        <h1 class="section-header">Agregar <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Catastrofe</span></h1>
        <h3></h3>
      </div>
<div class="contact-section">
<div class="container">
<form  method="POST" action="{{ route('catastrofe.store') }}">
                        {{ csrf_field() }}
<fieldset>

<!-- Form Name -->

 
<!-- Text input-->
<div class="col-md-6 form-line">

<div class="form-group">
  <label for="textinput">Nombre Catastrofe</label>  
  <input id="nombre" name="nombre" placeholder="Nombre" class="form-control" required="" type="text">
  <span class="help-block">nombre catastrofe</span>  
</div>

<!-- Select Basic -->
<div class="form-group">
  <label for="selectbasic">Seleccionar Tipo</label>
    <select id="tipo_catastrofe" name="tipo_catastrofe" class="form-control">
      <option value="1">Incendio</option>
      <option value="2">Inundacion</option>
    </select>
 
</div>

<!-- Text input-->
<div class="form-group">
  <label  for="Lugar">Lugar</label> 
  <input id="lugar_catastrofe" name="lugar_catastrofe"  placeholder="Lugar" class="form-control" required="" type="text">
  <span class="help-block">Lugar</span>  

</div>

<!-- Text input-->
<div class="form-group">
  <label for="FechaInicio">Fecha Inicio</label>  
 
  <input id="fecha_inicio" name="fecha_inicio" placeholder="dd-mm-aaaa" class="form-control" required="" type="date">
  <span class="help-block">help</span>  
 
</div>

<!-- Text input-->
</div>
<div class="col-md-6">
<div class="form-group">
  <label  for="FechaTermino">Fecha Termino</label>  

  <input id="fecha_termino" name="fecha_termino" placeholder="dd-mm-aaaa" class="form-control" required="" type="date">
  <span class="help-block">help</span>  

</div>
<!-- Textarea -->

<div class="form-group">
  <label class="col-md-4 control-label" for="Descripcion">Descripcion</label>  
  <div class="col-md-4">
  <input id="descripcion" name="descripcion" placeholder="Descripcion" class="form-control input-md" type="text">
  <span class="help-block">help</span>  
  </div>
  
 
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


@endsection