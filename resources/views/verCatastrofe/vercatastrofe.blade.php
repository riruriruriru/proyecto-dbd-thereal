@extends('layouts.app')
@section('content')
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Catastrofes</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ingresarMedida">Ingresar Medida</label>
    

  <div class="col-md-4">

     <form class="form-horizontal" method="POST" action="{{ route('medida') }}">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
    </form>

    <button id="ingresarMedida" name="ingresarMedida" type= "submit" class="btn btn-primary">Medida
    <a class="btn btn-link" action="{{ route('medida') }}">
    <button href="{{ route('medida') }}" action="pene">wea </button>                                                                       
    </button>
    {{route('medida') }}
  </div>
</div>

</fieldset>
</form>
@endsection('content')