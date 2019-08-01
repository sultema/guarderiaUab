<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guarderia-Institucion</title>
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
				<li><a href="{{ route('login') }}">Acceder</a></li>
				
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
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-8 col-md-9 info-section-ins">
					<!--======================================== Mision y vision ========================================-->
					<article class="full-reset" id="mision-vision">
						<div class="page-header" style="margin-bottom:40px;">
						  <h1><i class="fa fa-graduation-cap"></i> &nbsp; Misión y Vision</h1>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles">Misión</div>
						  <div class="panel-body">
						    <p class="lead text-justify">
									Contribuir al desarrollo integral para los hijos de los estudiantes, trabajadores administrativos y docentes universitarios al prestar el servicio para la atención temprana del niño/a, en un ambiente seguro, estimulante y divertido, apoyando así el desarrollo de la familia universitaria.
								</p>
						  </div>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles">Visión</div>
						  <div class="panel-body">
						    <p class="lead text-justify">
									Nuestra visión es mejorar y crecer hasta convertirnos en una gran guardería de educación y recreación de los hijos/as de los estudiantes, trabajadores administrativos y docentes para consolidarnos en un verdadero apoyo social a la familia universitaria.
							</p>
						  </div>
						</div>
					</article>
					<!--======================================== Reseña historica ========================================-->
					<article class="full-reset" id="resena-ins">
						<div class="page-header" style="margin-bottom:50px;">
						  <h1><i class="fa fa-university"></i> &nbsp; Reseña histórica</h1>
						</div>
						<h3 class="text-center titles text-uppercase">Antesedentes</h3>
						<p class="lead text-justify">
							La Universidad Autónoma del Beni "José Ballivián" fue creada el 18 de noviembre de 1967 mediante la Ley de la República de Bolivia No. 352. Es una institución de educación superior dedicada especialmente a la formación de los futuros profesionales de la región y del país.
						  <br><br>
							ofrece distintas becas a sus estudiantes entre las más nuevas se encuentra la Beca guardería un servicio cuyo objetivo es aminorar la preocupación de los estudiantes al tener que dejar a sus hijos a cargo de terceras personas y así contribuir que el estudiante tenga un mejor rendimiento académico.
							</p>
						<br><br>
						<h3 class="text-center titles text-uppercase">Marco legal</h3>
						<p class="lead text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem tempore quisquam dolorem, quos nihil eveniet eligendi, mollitia at nemo deleniti facilis aliquam. Odit maiores cumque perspiciatis sunt quibusdam ea culpa.
						</p>
					</article>
					<!--======================================== Ubicacion geografica ========================================-->
					<article class="full-reset" id="ubicacion-ins">
						<div class="page-header">
						  <h1><i class="fa fa-map"></i> &nbsp; Ubicación geográfica</h1>
						</div>
						<p class="lead text-justify">
							El presente proyecto es desarrollado para la Guardería de Niños de la Universidad Autónoma del Beni “José Ballivián”, ubicada en el Estado Plurinacional de Bolivia, Departamento del Beni, Ciudad de la Santísima Trinidad, en la avenida Japón.
							<br><br>
						</p>
						<br><br>
						<h3 class="text-center titles"><i class="fa fa-map-marker"></i> &nbsp; Mapa de localización</h3>
						<br>
						<div id="mapa-ins"></div>
					</article>
				</section>
				<!--======================================== Navegacion fija lateral derecha ========================================-->
				<nav class="hidden-xs scroll-navigation-ins">
					<figure class="full-reset">
						<img src="ins/assets/img/uab_logo.png" alt="Logo" class="img-responsive center-box">
					</figure>
					<h4 class="text-center titles">Información de la Guarderia</h4>
					<ul class="list-unstyled full-reset">
						<li data-href="#mision-vision">Misión y Visión</li>
						<li data-href="#resena-ins">Reseña Histórica</li>
						<li data-href="#ubicacion-ins">Ubicación Geofráfica</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Visitenos en</h4>
						<p class="text-center">Av. 6 de agosto - Segundo Piso Nº 208	Trinidad	Beni	Bolivia.</p>
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
<!--======================================== API de GOOGLE Maps ========================================-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</body>
</html>
