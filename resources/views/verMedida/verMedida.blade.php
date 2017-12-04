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

<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Site informations -->
    <title>MovidosxChile</title>
    <meta name="author" content="Dominik Serafin">
    <meta name="description" content="Free HTML5 Template created by Dominik Serafin.">

    <!-- Open Graph -->
    <meta property="og:title" content="Free Aurora Template">
    <meta property="og:description" content="Free HTML5 Template created by Dominik Serafin.">
    <meta property="og:url" content="http://serafin.io/aurora-template/">
    <meta property="og:image" content="http://serafin.io/aurora-template/content/og_image.png">

    <!-- Twitter Card -->
    <!--
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:domain" content="">
    <meta name="twitter:image:src" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="">
    -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('style/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('style/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('style/favicon/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('style/favicon/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('style/favicon/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('style/favicon/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('style/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('style/favicon/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('style/favicon/apple-touch-icon-76x76.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/64x64chilito.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/64x64chilito.png')}}" sizes="160x160">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/48x48chilito.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/16x16chilito.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/32x32chilito.png')}}" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="style/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="style/favicon/browserconfig.xml'">
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}">

    <!-- Fonts -->
    <link href="{{URL::asset('style/fonts/webfont-raleway/webfont-raleway.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('style/fonts/webfont-font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">

    <!-- Stylesheets -->
    <link href="{{URL::asset('style/css/global.css')}}" type="text/css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <div id="start" class="start">&nbsp;</div>
    <div class="maxwidth1050">&nbsp;</div>

      <section id="hero" class="hero" style="margin-left: 0px;">
        <div class="orga__background">&nbsp;</div>
        <div class="hero__gradient">&nbsp;</div>
    </section>



  <section >
        <h1>Tabla evento</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0" style="top :50px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Medida</th>
                        <th>Accion</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody> 
                        @foreach($medidas as $medida) 
                        <tr>
                            
                            <th id="id_medidas">{{$medida->id_medidas}}</th>
                            <th>{{$medida->nombre_medida}}</th>
                            <th>
                                <div class="btn-group btn-group-xs" style="width: 100px;" role="group" aria-label="...">
                                    <a style=" width: 150px; text-transform: none;" href="/infoMedida/{{$medida->id_medidas}}"  type="button" class="btn btn-default">Información</a>
                                </div>
                                           @if($usuario->id_tipo_usuario===1 or $usuario->id_tipo_usuario===2)
                                                    <form  method="POST" action="{{ route('borrarMedida') }}">
                                                        {{ csrf_field() }}
                                                       
                                                            <input id="id_medidas" type="hidden" class="form-control" name="id_medidas" value= "{{$medida->id_medidas}}" >

                                                           <div class="btn-group btn-group-xs" style="width: 100px;" role="group" aria-label="...">

                                                            <button  style=" width: 150px; padding-top: 1px;padding-bottom: 1px;margin-top: 0px;margin-bottom: 10px;" id="Submit" name="Submit" class="btn btn-default">Eliminar</button>
                                                        </div>
                                                        </form>
                                                    @endif
                                    <li class="dropdown">
                                            <a style="text-transform: none;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Agregar <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" style="text-transform: none;"> 
                                                <li><a style="font-size: 12px; text-transform: none;"  href="/centroAcopio/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Centro de Acopio</a></li> 

                                                <li><a style="font-size: 12px;  text-transform: none;"  href="/evento/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Evento</a></li> 
                                                 <li><a style="font-size: 12px; text-transform: none;"  href="/donacion/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Donacion</a></li> 
                                                 <li><a style="font-size: 12px; text-transform: none;"  href="/voluntariado/{{$medida->id_medidas}}" class= "btn btn-default">Agregar Voluntariado</a>
                                                </li> 
                                            </ul>
                                        </li>
                               
                            </th>
                            

                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
</section>




</body>



@endsection('content')