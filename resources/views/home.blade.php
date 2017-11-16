@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Masisi</div>

                <div class="panel-body">
                    <table class="responsive">
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Email</td>
                        </tr>
                         @foreach ($usuarios as $usuario)
                         <tr>
                            <td>{{$usuario->id}} </td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->num_tarjeta}}</td>
                         </tr>
                         @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
