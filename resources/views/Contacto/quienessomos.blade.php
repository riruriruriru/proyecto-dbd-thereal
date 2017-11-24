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
  height: px;
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
				<h1 class="section-header">¿Quiénes somos?<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"></span></h1>
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<h3>Somos la Comunidad de Organizaciones Solidarias, que reúne a 183 Fundaciones y Corporaciones que trabajan en la superación de la pobreza y la exclusión social, que junto a las organizaciones sociales reunidas en el Colunga Hub, Red de Voluntarios y a otras organizaciones de la sociedad civil como Greenpeace, Hogar de Cristo, Desafío Levantemos Chile, nos hemos articulado para poner a disposición de todos los ciudadanos una plataforma donde puedan encontrar cómo y dónde ayudar a las zonas de emergencia. El sitio busca canalizar ayudas y que todos podamos contribuir con la donación de bienes, de dinero y voluntariado de manera informada.
Movidos x Chile… Ayuda informado.</h3>


					<IMG SRC="http://www.movidosporchile.cl/wp-content/uploads/2017/01/LOGOS-13FEB2017.png">
					

@endsection('content')