<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guarderia | UAB @yield('title')</title>
   <link rel="stylesheet" href="{{ asset('ins/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ins/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('ins/css/bootstrap.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('ins/css/style.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="ins/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{ asset('ins/js/modernizr.js')}}"></script>
    <script src="{{ asset('ins/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('ins/js/main.js')}}"></script>
</head>
<body>
    <!--======================================== Boton ir arriba ========================================-->
    <i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
    <!--======================================== Navegación ========================================-->
    <header class="full-reset header">
        <!--======================================== Logo(Nombre INS) ========================================-->
        <div class="full-reset logo">
            <span class="hidden-lg hidden-md">GUARDERIA</span>
            <span class="hidden-xs hidden-sm">UNIVERSIDAD AUTONOMA DEL BENI</span>
        </div>
        <!--======================================== Links de navegación ========================================-->
        <nav class="full-reset navigation">
            <ul class="full-reset list-unstyled">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('info') }}">Institución</a></li>
                <li><a href="{{ route('register') }}">Registro</a></li>
                <li><a href="{{ route('login') }}">Acceder</a></li>
                <li><a href="#" class="btm-mega-menu">Más &nbsp;<i class="fa fa-caret-down"></i></a></li>
            </ul>
        </nav>
        <!--======================================== Mega menu ========================================-->
        <div class="full-reset mega-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <span class="full-reset titles">Recursos educativos</span>
                        <ul class="list-unstyled full-reset">
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-search"></i>&nbsp; Buscar en GOOGLE</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-graduation-cap"></i>&nbsp; Plataforma (MOODLE)</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <span class="full-reset titles">Enlaces importantes</span>
                        <ul class="list-unstyled full-reset">
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-university"></i>&nbsp; MINED</a></li>
                            <li><a href="#!"><i class="fa fa-paw"></i>&nbsp; ARA-MACAO</a></li>
                            <li><a href="#!"><i class="fa fa-globe"></i>&nbsp; JOVENES A.T.T</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-flask"></i>&nbsp; UNIVERSIDADES</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-gavel"></i>&nbsp; GOBIERNO</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <span class="full-reset titles">Archivos</span>
                        <ul class="list-unstyled full-reset">
                            <li><a href="#!"><i class="fa fa-star-o"></i>&nbsp; Promociones INS</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-file-text-o"></i>&nbsp; Const. de conducta</a></li>
                            <li><a href="#!"><i class="fa fa-download"></i>&nbsp; Descargas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <i class="fa fa-times-circle btm-mega-menu close-mega-menu fa-2x"></i>
        </div>
        <!--======================================== Boton menu mobil ========================================-->
        <a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
    </header>
    <!--======================================== Logo & Lema ========================================-->
    <section class="full-reset font-cover" style="background-image: url(ins/assets/img/bk2.jpg);">
        <div class="full-reset" style="height: 100%; background-color: rgba(255,255,255,.6); padding: 60px 0;">
            <h1 class="text-center titles">Guarderia Universitaria.</h1>
            <figure class="Logo-Ins-Index">
                <img src="ins/assets/img/uab_logo.png" alt="Logo" class="img-responsive">
            </figure>
            <p class="lead text-center">
                "La educación no crea al hombre, le ayuda a crearse a sí mismo” M. Debesse"
            </p>
        </div>
    </section>
    <div class="divider-general"></div>
    <!--======================================== Video corto & carrusel========================================-->
    <section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
        <div class="container">
            <h2 class="text-center titles">Instalaciones de la institución</h2>
            <br><br>
            <!--======================================== Carrusel ========================================-->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-push-6">
                    <h3 class="text-center titles">Fotos Instalaciones</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repudiandae cumque dolorum mollitia tempora odit quam, rerum pariatur ipsa unde, delectus laborum aliquid voluptates, nihil sed iste minima quod doloribus.
                    <a href="#" class="open-link-newTab">Has click aqui para ver las fotos</a>
                    </p>
                    <i class="fa fa-picture-o icon-index hidden-xs hidden-sm"></i>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                    <div id="slider-ins" class="carousel slide" data-ride="carousel">
                      <!-- Indicadores -->
                      <ol class="carousel-indicators">
                        <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-ins" data-slide-to="1"></li>
                        <li data-target="#slider-ins" data-slide-to="2"></li>
                      </ol>

                      <!-- Imagenes -->
                      <div class="carousel-inner" role="listbox">

                        <!-- Primera imagen -->
                        <div class="item active">
                          <img src="ins/assets/gallery/1.png" alt="Default">
                          <div class="carousel-caption">
                            Lorem ipsum dolor sit amet
                          </div>
                        </div>

                        <!-- Segunda imagen -->
                        <div class="item">
                          <img src="ins/assets/gallery/2.png" alt="Default">
                          <div class="carousel-caption">
                            Lorem ipsum dolor sit amet
                          </div>
                        </div>

                        <!-- Tercera imagen -->
                        <div class="item">
                          <img src="ins/assets/gallery/3.png" alt="Default">
                          <div class="carousel-caption">
                            Lorem ipsum dolor sit amet
                          </div>
                        </div>

                      </div>

                      <!-- Controles -->
                      <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <br>
            <div class="divider-general"></div>
            <br>
            <!--======================================== Video ========================================-->
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3 class="text-center titles">Video Instalaciones</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repudiandae cumque dolorum mollitia tempora odit quam, rerum pariatur ipsa unde, delectus laborum aliquid voluptates, nihil sed iste minima quod doloribus.</p>
                    <i class="fa fa-film icon-index hidden-xs hidden-sm"></i>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <video controls>
                        <source src="ins/assets/video/intro.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <div class="divider-general"></div>
    <!--======================================== Enlaces importantes ========================================-->
    <section class="text-center important-links-index">
        <h2 class="titles">Sitios y enlaces importantes</h2>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-graduation-cap"></i>
            <p>MOODLE</p>
        </a>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-paw"></i>
            <p>ARA-MACAO</p>
        </a>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-globe"></i>
            <p>JOVENES A.T.T</p>
        </a>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-star-o"></i>
            <p>Promo. INS</p>
        </a>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-file-text-o"></i>
            <p>Cons.conducta</p>
        </a>

        <a href="#!" class="open-link-newTab">
            <i class="fa fa-download"></i>
            <p>Descargas</p>
        </a>
    </section>
    <!--======================================== Pie de pagina ========================================-->
    <footer class="full-reset footer">
        <div class="full-reset" style="padding: 15px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <h4 class="titles text-center">Visitenos en</h4>
                        <p class="text-center">Av. 6 de agosto - Segundo Piso Nº 208    Trinidad    Beni    Bolivia.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h4 class="titles text-center">Contactenos</h4>
                        <p class="text-center">Telefono:(591)-3-46-28657 <br>Correo Electrónico: correo@uabjb.edu.bo</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h4 class="titles subtitles-footer">Siguenos en</h4>
                        <ul class="list-unstyled links-footer">
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-facebook"></i> &nbsp; Facebook</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
                            <li><a href="#!" class="open-link-newTab"><i class="fa fa-google-plus"></i> &nbsp; Google+</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2019 Ingenieria de Sistemas</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
