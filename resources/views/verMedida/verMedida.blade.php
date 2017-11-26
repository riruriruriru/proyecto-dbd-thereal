@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><

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


<form class="form-horizontal" method="GET">
<fieldset>

<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>ID</span>
                <span>Nombre de Medida</span>
                <span>Acción</span>
                <span></span>
            </li>

            
            	@foreach($medidas as $medida)
                <span id="id_medidas">{{$medida->id_medidas}}</span>
                <span>{{$medida->nombre_medida}}</span>

                <span>
                    <div class="btn-group btn-group-xs" role="group" aria-label="...">
                        <button href=""  type="button" class="btn btn-default"><a href="">Editar</a></button>
                        <button type="button" class="btn btn-default" disabled>Eliminar</button>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Agregar <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu"> 
                                    <li><a href="/centroAcopio/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Centro de Acopio</a></li> 

                                    <li><a href="/evento/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Evento</a></li> 

                                </ul>
                            </li>



                       

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