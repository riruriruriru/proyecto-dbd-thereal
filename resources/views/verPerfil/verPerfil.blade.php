@extends('layouts.app')

@section('styles')
@parent
<style type="text/css"><

/*Contact sectiom*/
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
  height: 550px;
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
            <div class="section-content">
                <h1 class="section-header">Infomración del Usuario <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"></span></h1>
                <h3></h3>
            </div>
            <div class="contact-section">
            <div class="container">
                <form>
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Nombre</label>
                            <input type="email" class="form-control" readonly="readonly" id="exampleInputEmail" value= "{{$datos->name}}">
                        </div>
                        @if($datos->id_tipo_usuario===4)
                      <div class="form-group">
                            <label for="exampleInputUsername">Apellido</label>
                            <input type="email" class="form-control" readonly="readonly" id="exampleInputEmail" value= "{{$datos->last_name}}">
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control" readonly="readonly" id="exampleInputEmail" value= "{{$datos->email}}">
                        </div>  
                        <div class="form-group">
                            <label for="telephone">Número de tarjeta</label>
                            <input type="email" class="form-control" readonly="readonly" id="exampleInputEmail" value= "{{$datos->num_tarjeta}}">
                        </div>

                    </div>
                </form>
            </div>
        </section>



@endsection('content')