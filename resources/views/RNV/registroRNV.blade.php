@extends('layouts.app')
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
  padding-top: 150px;
  width: 100%;
  width: 100vw;
  height: 53vw;
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
@section('content')
<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



<section id="contact">
  
    <div class="container">
        <div class="section-content">
            <h1 class="section-header">Inscribirse <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> RNV</span></h1>
            <h3></h3>
        </div>
          
        <div class="contact-section">
            <div class="container">
   
           
                <form method="POST" action="{{ route('RNV.store') }}">
                        {{ csrf_field() }}
                    <div class="col-md-6 form-line">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nombre</label>
                          
                            <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" readonly= 'readonly' required autofocus>
                          
                        </div>


                            <div class="form-group">                          
                            <input id="id_usuario_activo"  class="form-control" name="id_usuario_activo" value="{{ $usuario->id }}" readonly= 'readonly' type= 'hidden' required autofocus>
                          
                             </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name">Apellido</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $usuario->last_name }}" readonly= 'readonly' required autofocus>
                            
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail</label>

                            
                            <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email }}" readonly= 'readonly' required>
                            
                        </div>
         
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Rut o Pasaporte</label>

                            
                            <input id="rut_pasaporte" type="rut_pasaporte" class="form-control" name="email" value="{{ $usuario->rut_pasaporte }}" readonly= 'readonly' required>
                            
                        </div>
                    

                        @foreach($habilidades_user as $habilidad)
                          <div class="form-group">
                            <label for="password-confirm">Habilidad</label>

                            
                            <input id="tipo_habilidad" type="text" readonly="readonly" class="form-control" name="tipo_habilidad" value='{{$habilidad}}' >
                           
                        </div>

                        @endforeach


                        <div class="form-group">
                            
                             <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Enviar Solicitud</button>
                            
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
          <?php
        $dato = Session::get('flash');
        if ($dato != ''){
            echo "<script>alert('";
            echo $dato;
            echo "')";
            echo "</script>";
          
        }
?>
 

@endsection