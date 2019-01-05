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

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
</head>
<body>
<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">Guarderia </span>
			<span class="hidden-xs hidden-sm">Universidad Autonoma del Beni JB</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li><a href="{{ url('informacion') }}">Institución</a></li>
				<li><a href="{{ route('register') }}">Registrar</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="#">Galería</a></li>
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
		<!--======================================== Boton menu mobil =================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>

	@yield('content')

	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Visitenos en</h4>
						<p class="text-center">Av. 6 de agosto - Tecer Piso Nº 208 Trinidad Beni Bolivia.</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Contactenos</h4>
						<p class="text-center">(591)-3-46-28657 <br>Correo Electrónico: correo@uabjb.edu.bo</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles subtitles-footer">Siguenos en</h4>
						<ul class="list-unstyled links-footer">
							<li><a href="http://www.facebook.com/uabjbbeni" class="open-link-newTab"><i class="fa fa-facebook"></i> &nbsp;Facebook</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-google-plus"></i> &nbsp; Google+</a></li>
						</ul>
					</div>
					<div class="col-xs-12">
						<div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2019 ING. DE SISTEMAS</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT_VyvxwfsuUfO0oVMlxwKiAaDmAIqzQo"></script>
</body>
</body>
</html>