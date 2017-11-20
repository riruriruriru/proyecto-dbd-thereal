@extends('layouts.app')
@section('content')
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Catastrofes</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ingresarMedida">Ingresar Medida</label>
    

  <li><a href="{{ route('medida') }}">Ingresar Medida</a></li>
</div>

</fieldset>
</form>
@endsection('content')