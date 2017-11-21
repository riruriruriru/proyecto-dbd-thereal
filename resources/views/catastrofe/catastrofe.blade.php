@extends('layouts.app')

@section('content')

<form class="form-horizontal" method="POST" action="{{ route('catastrofe.store') }}">
                        {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" placeholder="Nombre" class="form-control input-md" required="" type="string">
  <span class="help-block">nombre medida</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Seleccionar Tipo</label>
  <div class="col-md-4">
    <select id="tipo_catastrofe" name="tipo_catastrofe" class="form-control">
      <option value="1">Incendio</option>
      <option value="2">Inundacion</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Lugar">Lugar</label>  
  <div class="col-md-4">
  <input id="lugar_catastrofe" name="lugar_catastrofe" placeholder="Lugar" class="form-control input-md" type="text">
  <span class="help-block">Lugar</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="FechaInicio">Fecha Inicio</label>  
  <div class="col-md-4">
  <input id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio" class="form-control input-md" type="date">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="FechaTermino">Fecha Termino</label>  
  <div class="col-md-4">
  <input id="fecha_termino" name="fecha_termino" placeholder="Fecha Termino" class="form-control input-md" type="date">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descripcion">Descripcion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descripcion" name="descripcion">...</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit">Submit</label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


@endsection