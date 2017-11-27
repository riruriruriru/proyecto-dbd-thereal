<!DOCTYPE html><html lang="en">
<head>
    <!-- Basic informations -->
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
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-160x160.png')}}" sizes="160x160">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{URL::asset('style/favicon/favicon-32x32.png')}}" sizes="32x32">
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

    <!-- Scripts preload -->
    <!--[if lt IE 9]><script src="style/js/html5shiv.js"></script><![endif]-->
</head>

<body>






    <!-- Some Helper Stuff -->
    <div id="start" class="start">&nbsp;</div>
    <div class="maxwidth1050">&nbsp;</div>







    <!-- Header -->
    <header class="header">
        <div class="header__wrapper">
            <div class="header__hamburger">
                <div class="header__hamburger-block">&nbsp;</div>
                <div class="header__hamburger-block">&nbsp;</div>
                <div class="header__hamburger-block">&nbsp;</div>
            </div>
           
            <nav class="header__navigation">
                <a href="#start" class="js-smooth-scroll">
                    <div class="js-smooth-scroll  header__navigation-element">Home</div>
                </a>
                <a href="#experience" class="js-smooth-scroll">
                    <div class="header__navigation-element  header__navigation-element--experience">Información</div>
                </a>
                <a href="#contact" class="js-smooth-scroll">
                    <div class="header__navigation-element  header__navigation-element--contact">Contactanos</div>
                </a>
            </nav>

        

            <div class="header__social-icons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{url('/home')}}"><i class="fa fa-home fa-1x"></i></a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>
                        
                    @else
                        <a href="{{url('/login')}}"><i class="fa fa-user-circle fa-1x"></i></a>
                    @endauth
                @endif
            </div>
        </div>
    </header>
    <!-- End Header -->



    <!-- First Fixed "Hero" Section -->
    <!--HoMe de la aplicación-->
    <section id="hero" class="hero">
        <div class="orga__background">&nbsp;</div>
        <div class="hero__gradient">&nbsp;</div>
        <div class="hero__content">
            <div class="hero__content-wrapper">
                <div class="hero__title-wrapper">
                    <div class="hero__title-large">Hola!</div>
                    <div class="hero__title-small">Bienvenido a MovidosxChile</div>
                </div>
                <div class="hero__photo-wrapper">
                    <div class="chile__photo"> 
                    </div>
                </div>
                <div class="hero__description">
                    Este sitio busca canalizar la ayuda ante alguna emergencia o catastrofe, para que todos podamos contribuir con la donación de bienes, de dinero y voluntariado de manera informada. Por eso necesitamos tu ayuda, registrate ahora y comienza el cambio.
                </div>
                @if (Route::has('login'))
                    @auth

                    @else
                        <div class="hero__call-to-action">
                            <a href="/register" target="_blank" class="hero__button  ghost-button  ghost-button--hero">Comenzar cambio &nbsp; <i class="fa fa-user-plus"></i></a>
                        </div>
                    @endauth
                @endif
            </div>
        </div>
    </section>
    <!-- End First Fixed "Hero" Section -->















    <!-- Scrollable Content -->
    <div class="content">















        <!-- "Experience" Section -->
        <section id="experience" class="experience">
            <div class="experience__hollow-arrow">&nbsp;</div>
            <div class="experience__wrapper">
                <div class="section-header"  style = "margin-bottom: 100px">
                    <div class="section-header__title  section-header__title--experience">Información</div>

                    <div class="section-header__subtitle">¿Qué puedes hacer en esta página?</div>

                </div>
                <div class="experience__icons-wrapper">
                    



                    <div class="showcase__stage-wrapper">

                        <!-- project 1 -->
                        <div data-project="p1" class="showcase__stage  showcase__stage--active">
                           
                            <div class="showcase__slider">
                            
                                <ul class="rslides">
                                @if(count($catastrofes)>0)
                                    @foreach($catastrofes as $catastrofe)
                                    <li>
                                        <a href="/infoCatastrofe/{{$catastrofe->id_catastrofe}}" target="_blank">
                                             @if($catastrofe->tipo_catastrofe === 1)
                                            <img src="content/incendio.jpg">
                                            @elseif($catastrofe->tipo_catastrofe === 2)
                                            <img src="content/inundacion.jpg">
                                            @elseif($catastrofe->tipo_catastrofe === 3)
                                            <img src="content/terremoto.jpg">
                                            @endif

                                        </a>
                                    </li>
                                    @endforeach
                                @elseif(count($catastrofes)===0)
                                <li>
                                    <img src="content/project01_slide01.jpg">
                                </li>
                                @endif

                                </ul>
                            </div>
                            <div class="showcase__infos-wrapper">
                                <div class="showcase__title">
                                    Medidas
                                    <div class="showcase__title-description">Como ayudar</div>
                                </div>

                                <div class="showcase__point">
                                    <div class="showcase__point-title">Donar bienes</div>
                                    <div class="showcase__point-details-excerpt">
                                        Dentro de la página puedes buscar o encontrar los diferentes centros de acopio ubicados en los distintos lugares <span class="showcase__readmore">más</span>
                                    </div>
                                    <div class="showcase__point-details-full">
                                         ingresados por las organizaciones de beneficiancia, además encontraras el estado del centro, la cantidad y tipo de bien que se necesita.
                                         <span class="showcase__readless">menos</span>
                                        
                                    </div>
                                </div>
                                <div class="showcase__point">
                                    <div class="showcase__point-title">Donar dinero</div>
                                    <div class="showcase__point-details-excerpt">
                                        Si deseas realizar un aporte económico en ayuda para un evento en especifico, lo puedes hacer 
                                        lugares <span class="showcase__readmore">más</span>
                                    </div>
                                    <div class="showcase__point-details-full">
                                        mediante una transferencia bancaria a una cuenta de un banco especificado aqui en la página.
                                        <span class="showcase__readless">menos</span>
                                    </div>
                                </div>


                                <div class="showcase__point">
                                    <div class="showcase__point-title">Voluntariado</div>
                                    <div class="showcase__point-details-excerpt">
                                        Si lo tuyo es ayudar en terreno, en esta plataforma encontraras toda la información necesaria 
                                        <span class="showcase__readmore">más</span>
                                    </div>
                                    <div class="showcase__point-details-full">
                                        para que puedas ir en ayuda a los que mas lo necesitan, además tambien puedes ayudar en eventos a beneficio. <!--<span class="showcase__ellipsis"></span>-->
                                        <span class="showcase__readless">menos</span>
                                    </div>
                                </div>

                                @if (Route::has('login'))
                                    @auth

                                    @else
                                        <a target="_blank" href="/register" class="showcase__button  ghost-button  ghost-button--realizations">     Registrate ahora</a>
                                        </div>
                                    @endauth
                                @endif
                        </div>

                        <!-- project 2 -->
                        

                        <!-- project 3 -->
                        

                        <!-- project 4 -->
                        

                        <!-- project 5 -->

                </div>
            </div>
        </section>
        <!-- End "Experience" Section -->

        <!-- "Contact" Section -->
        <section id="contact" class="contact">
            <div class="contact__wrapper">
                <div class="section-header">
                    <div class="section-header__title  section-header__title--contact">Contactanos</div>
                    <div class="section-header__subtitle">Contactanos mediante nuestras redes sociales o solo llena el formulario</div>
                </div>

                <div class="contact__icons-wrapper">
                    <div class="contact__icon">
                        <a target="_blank" href="mailto:dominikdsgnr@gmail.com"><i class="fa fa-envelope"></i></a>
                        <div class="contact__icon-description">movidosxchile@comunidad-org.cl</div>
                    </div>
                    <div class="contact__icon">
                        <a target="_blank" href="https://twitter.com/search?q=%23MovidosxChile&lang=es"><i class="fa fa-twitter"></i></a>
                        <div class="contact__icon-description">@MovidosxChile</div>
                    </div>
                    <div class="contact__icon">
                        <i class="fa fa-phone-square"></i></a>
                        <div class="contact__icon-description">+56 9 8829 9141</div>
                    </div>
                </div>

                <div class="contact__spacer">&nbsp;</div>

                <form class="contact__form">

                    <div class="contact__textarea-wrapper">
                        <label for="message_content" class="contact__label">Mensaje</label>
                        <div class="contact__response-ajax-text">&nbsp;</div>
                        <textarea id="message_content" rows="10" placeholder="Hola, si tienes alguna duda por favor escribenos tu inquietud" required></textarea>
                    </div>

                    <div class="contact__bottom-wrapper">
                        <div class="contact__sender-info-wrapper">
                            <div class="contact__input-wrapper  contact__input-wrapper--name">
                                <label for="sender_name" class="contact__label">Tu nombre</label>
                                <div class="contact__response-ajax-text">&nbsp;</div>
                                <input id="sender_name" type="text" placeholder="Sebastian Morris" required>
                            </div>
                            <div class="contact__input-wrapper  contact__input-wrapper--email">
                                <label for="sender_email" class="contact__label">Tu correo</label>
                                <div class="contact__response-ajax-text">&nbsp;</div>
                                <input id="sender_email" type="email" placeholder="morris@morris.com" required>
                            </div>
                        </div>

                        <div class="contact__button-wrapper  ghost-button  ghost-button--contact">
                            <div class="contact__paper-plane-wrapper"><i class="fa fa-paper-plane"></i></div>
                            <div class="contact__response  contact__response--success">
                                <div class="contact__response-title"><i class="fa fa-check"></i> Mensaje enviado</div>
                                <div class="contact__response-description  contact__response-description--success">&nbsp;</div>
                            </div>
                            <div class="contact__response  contact__response--error">
                                <div class="contact__response-title"><i class="fa fa-warning"></i> Error.</div>
                                <div class="contact__response-description  contact__response-description--error">Message couldn't be sent.</div>
                            </div>
                            <input id="contact__submit" type="button" value=" ">
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <!-- End "Contact" Section -->

        <!-- Footer -->
        <footer id="footer" class="footer">
            <div class="footer__wrapper">
                <div class="footer__copyright">Todos los derechos reservados &copy; 2017</div>
                <a href="http://serafin.io/?utm_source=Aurora-Template&utm_medium=Footer-Image&utm_campaign=Freebie" target="_blank" class="footer__image">&nbsp;</a>
            </div>
        </footer>
        <!-- End Footer -->


    </div>

    <script src="{{URL::asset('style/js/dependencies.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('style/js/global.js')}}" type="text/javascript"></script>

</body>
</html>



























    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'MovidosxChile') }}
                </div>

                <div class="links">
                    <a href="http://www.onemi.cl/alertas">Alertas Onemi</a>
                    <a href="http://www.movidosporchile.cl/">MOVIDOS X CHILE</a>
                    <a href="http://www.sismologia.cl">Sismologia</a>
                    <a href="https://www.armada.cl/armada/articulos-sin-seccion/general/informacion-de-ayuda-para-zonas-de-catastrofe/2014-02-25/121945.html">Informacion Armada</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

