@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><


/*           -----------------------------------*/


.container {
    
    width: 100%;
    height: 100%;
    background-color: #d4d3d3;
    padding: 20px;
    
}

.listWrap {
    
    height: 800px;
    width: 1000px;
    padding-top: 50px;
    
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

                <!-- inicio tabla-->
                
                            <div class="container">

                                <div class="listWrap" style="position: relative; top: 50px">
                                
                                    <ul class="list">
                                    
                                        <li>
                                            <span>ID</span>
                                            <span>Nombre de Catástrofe</span>
                                            <span>Status</span>
                                            <span>Acción</span>
                                            <span></span>
                                        </li>

                                        

                                             @foreach($catastrofes as $catastrofe)
                                            <span name="id_catastrofe">{{$catastrofe->id_catastrofe}}</span>
                                            <span>{{$catastrofe->nombre}}</span>
                                            @if($catastrofe->fecha_termino != "")
                                            <span>Inactivo</span>
                                            @elseif($catastrofe->fecha_termino == "")
                                            <span>Activo</span>
                                            @endif
                                            <span>
                                                <div class="btn-group btn-group-xs" role="group" aria-label="...">

                                                     @if($datos->id_tipo_usuario===1 or $datos->id_tipo_usuario===2)
                                                     <a href="/infoCatastrofe/{{$catastrofe->id_catastrofe}}" class= "btn btn-default">Editar</a>
                                                    @endif




                                                     @if($datos->id_tipo_usuario===3 or $datos->id_tipo_usuario===4)
                                                    <a href="/infoCatastrofe/{{$catastrofe->id_catastrofe}}" class= "btn btn-default">Información</a>
                                                    @endif
                                                    @if($datos->id_tipo_usuario===1 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===3) 
                                                    <a href="/medida/{{$catastrofe->id_catastrofe}}" class= "btn btn-default">Ingresar Medida</a> 
                                                    @endif
                                                    <a href="/verMedida/{{$catastrofe->id_catastrofe}}" class= "btn btn-default">Ver Medidas</a> 
                                                    @if($datos->id_tipo_usuario===1 or $datos->id_tipo_usuario===2)
                                                        <form  method="POST" action="{{ route('borrarCatastrofe') }}">
                                                         {{ csrf_field() }}
                                                      
                                                            <input id="id_catastrofe" type="hidden" class="form-control" name="id_catastrofe" value= "{{$catastrofe->id_catastrofe}}" >
                                                            <div class="btn-group btn-group-xs" role="group" aria-label="...">                   
                                                         <button style="padding-top: 1px;padding-bottom: 1px;margin-top: 0px;margin-bottom: 3px;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                                        </div>
                                                        </form>
                                                    @endif
                                                

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


<!-- fin tabla-->




@endsection('content')