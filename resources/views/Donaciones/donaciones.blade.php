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
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact">

<div class="container">




 <div class="section-content">
        <h1 class="section-header">Agregar <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Donacion</span></h1>
        <h3></h3>
      </div>
<div class="contact-section">
<div class="container">
<form  method="POST" action="{{ route('donacion.store') }}">
                        {{ csrf_field() }}
<fieldset>

<!-- Text input-->
<div class="col-md-6 form-line">

<div class="form-group">
  <label for="textinput">Nombre Donacion</label>  
  <input id="nombre" name="nombre" placeholder="Nombre" class="form-control" required="" type="text">
</div>
<!-- Text input-->
<div class="form-group">
  <label  for="id_medidas_donacion"></label> 
  <input id="id_medidas_donacion" name="id_medidas_donacion"  placeholder="" class="form-control" required="" value={{$id_medidas_donacion}} type="hidden">

</div>


<!-- Text input-->
<div class="form-group">
  <label for="objetivo">Monto objetivo</label>  
 
  <input id="objetivo" name="objetivo" placeholder="Monto objetivo" class="form-control" required="" type="number" min ="0"> 
</div>
<!-- Text input-->
<div class="form-group">
  <label  for="numero_cuenta">Numero Cuenta</label> 
  <input id="numero_cuenta" name="numero_cuenta"  placeholder="Numero Cuenta" class="form-control" required="" type="number">

</div>
<!-- Text input-->
<div class="form-group">
  <label  for="fecha_inicio">Fecha Inicio Donaciones</label> 
  <input id="fecha_inicio" name="fecha_inicio"  placeholder="Fecha Inicio Donaciones" class="form-control" required="" type="date">

</div>

<!-- Text input-->
<div class="form-group">
  <label  for="fecha_termino">Fecha Termino Donaciones</label> 
  <input id="fecha_termino" name="fecha_termino"  placeholder="Fecha Termino Donaciones" class="form-control" required="" type="date">

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
</html>
