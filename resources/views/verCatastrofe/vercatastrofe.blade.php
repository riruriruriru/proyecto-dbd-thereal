@extends('layouts.app')
@section('content')
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Catastrofes</legend>
  <li><a href="{{ route('medida') }}">Ingresar Medida</a></li>
<table>
    @foreach($catastrofes as $catastrofe)
        <tr><td>{{$catastrofe->id_catastrofe}} - {{$catastrofe->nombre}}</td></tr>
    @endforeach
</table>


</fieldset>
</form>
@endsection('content')