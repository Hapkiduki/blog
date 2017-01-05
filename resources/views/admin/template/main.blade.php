	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'Default')| Panel de Administración</title>
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}">
	</head>
	<body>

	@include('admin.template.partials.nav')

		<section>
		<div class="container">
	  <div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">@yield('title')</h3>
	  </div>
	  <div class="panel-body">
	  @include('flash::message')
	  @include('admin.template.partials.errors')
	    @yield('content')
	  </div>
	</div>
	  </div>
	


	
<div class="container">
	<footer class="admin-footer">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			
			<div class="collapse navbar-collapse">
				<p class="navbar-text">Todos los derechos reservados &copy {{ date('Y')}}</p>
				<p class="navbar-text navbar-right"><b>AFCO</b></p>
			</div>
				</div>
		</nav>
	</footer>
			</div>
		
		</section>
				<script src="{{ asset('plugins/jquery/js/jquery.slim.js') }}"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		
		<script src="{{ asset('plugins/bootstrap/js/npm.js') }}"></script>


		<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
		<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>

		@yield('js')
	</body>
	</html>