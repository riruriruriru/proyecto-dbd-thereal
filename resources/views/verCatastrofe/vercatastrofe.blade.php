@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><

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

<form class="form-horizontal">
<fieldset>

<!-- Form Name 
<legend>Catastrofes</legend>
  <li><a href="{{ route('medida') }}">Ingresar Medida</a></li>
<table>
    @foreach($catastrofes as $catastrofe)
        <tr><td>{{$catastrofe->id_catastrofe}} - {{$catastrofe->nombre}}</td></tr>
    @endforeach
</table>
-->


<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>ID</span>
                <span>Nombre de Catástrofe</span>
                <span>Progreso</span>
                <span>Role</span>
                <span>Acción</span>
                <span></span>
            </li>

            
            	@foreach($catastrofes as $catastrofe)
                <span>{{$catastrofe->id_catastrofe}}</span>
                <span>{{$catastrofe->nombre}}</span>
                <span>4341</span>
                <span><span class="label label-warning">Manager</span></span>
                <span>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                        <button href= "{{ route('catastrofe')}}" type="button" class="btn btn-default"><a href="{{ route('catastrofe') }}">Editar</a></button>
                        <button type="button" class="btn btn-default" disabled>Eliminar</button>
                        <button href="{{ route('medida') }}" type="button" class="btn btn-default"><li><a href="{{ route('medida') }}">Ingresar Medida</a></li></button>

                    </div>
                </span>
                <li></li>
                @endforeach
                <span></span>
            </li>
        </ul>
    </div>
</fieldset>
</form>
@endsection('content')