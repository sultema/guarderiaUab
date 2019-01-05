@extends('institucion.index')
@section('title', 'Bienvenido')
@section('content')

<!--======================================== Logo & Lema ========================================-->
    <section class="full-reset font-cover" style="background-image: url(ins/assets/img/back.png);">
        <div class="full-reset" style="height: 100%; background-color: rgba(255,255,255,.6); padding: 60px 0;">
            <h1 class="text-center titles">Guarderia Universitaria</h1>
            <figure class="Logo-Ins-Index">
                <img src="ins/assets/img/uab_logo.png" alt="Logo" class="img-responsive">
            </figure>
            <p class="lead text-center">
                “La educación no crea al hombre, le ayuda a crearse a sí mismo” M. Debesse
            </p>
        </div>
    </section>
    <div class="divider-general"></div>
    <!--======================================== Video corto & carrusel===============================-->
    <section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
        <div class="container">
            <h2 class="text-center titles">Instalaciones de la institución</h2>
            <br><br>
            <!--======================================== Carrusel ========================================-->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-push-6">
                    <h3 class="text-center titles">Fotos Instalaciones</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repudiandae cumque dolorum mollitia tempora odit quam, rerum pariatur ipsa unde, delectus laborum aliquid voluptates, nihil sed iste minima quod doloribus.
                    <a href="http://ins-sensunte.net/imagenes/espacio_ins/Flash01/index.html" class="open-link-newTab">Has click aqui para ver las fotos</a>
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
                          <img src="ins/assets/gallery/default.png" alt="Default">
                          <div class="carousel-caption">
                            Lorem ipsum dolor sit amet
                          </div>
                        </div>

                        <!-- Segunda imagen -->
                        <div class="item">
                          <img src="ins/assets/gallery/default.png" alt="Default">
                          <div class="carousel-caption">
                            Lorem ipsum dolor sit amet
                          </div>
                        </div>

                        <!-- Tercera imagen -->
                        <div class="item">
                          <img src="ins/assets/gallery/default.png" alt="Default">
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
                        <source src="ins/assets/video/Introl.mp4" type="video/mp4">
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
 <div class="divider-general"></div>
@endsection