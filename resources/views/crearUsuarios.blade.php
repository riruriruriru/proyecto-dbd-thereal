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
  padding-top: 60px;
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
            <h1 class="section-header">Registro <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Usuario</span></h1>
            <h3></h3>
        </div>
          
        <div class="contact-section">
            <div class="container">
   
           
                <form method="POST" action="{{ route('usuario.crear') }}">
                        {{ csrf_field() }}
                    <div class="col-md-6 form-line">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nombre</label>
                          
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                             @if ($errors->has('name'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name">Apellido</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" required autofocus>
                            
                        </div>

                        <div class="form-group{{ $errors->has('rut_pasaporte') ? ' has-error' : '' }}">
                            <label for="rut_pasaporte">Rut o Pasaporte</label>
                            <input id="rut_pasaporte" type="text" class="form-control" name="rut_pasaporte" required autofocus>
                            
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label for="selectbasic">Seleccionar Tipo</label>
                            <select id="id_tipo_usuario" name="id_tipo_usuario" class="form-control">
                              <option value="2">Gobierno</option>
                              <option value="3">Organizacion</option>
                              <option value="4">Usuario Comun</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail</label>

                            
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>
                
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>

                       
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmar contraseña</label>

                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                           
                        </div>

                        <div class="form-group">
                            
                             <button id="Submit" name="Submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Registrar</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
          
 

@endsection