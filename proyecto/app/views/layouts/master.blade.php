<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>productosonline.es</title>
		<meta name="description" content="">
		<!-- Bootstrap -->
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/main.css'); }}
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		{{ HTML::script('scripts/jquery.min.js'); }}
		{{ HTML::script('scripts/bootstrap.min.js'); }}
		{{ HTML::script('scripts/main.js'); }}
	</head>
	<body>
		<section id="cookies-alert">
			¡Hola! Utilizamos cookies propias y de terceros para mejorar la navegación y analizar el uso de este sitio web. Al continuar navegando entendemos que aceptas nuestra política de cookies.
			<img class="cerrar" src="{{url()}}/images/iconos/cerrar.png" alt="cerrar">
		</section>
		<section class="container">
			<header>
				<div class="hidden-xs">
					<section class="row">
						<div class="col-sm-6 col-md-offset-4 col-md-5">
							<p class="te-llamamos">
								¿Necesitas ayuda para contratar?
								<a href="#" class="te-llamamos">
									<strong>Te llamamos</strong>
								</a>
							</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<p class="text-right links">
								<a href="#">Blog</a>
								<span>|</span>
								<a href="#">Contacto</a>
								<span>|</span>
								<a href="#">Entrar &gt;</a>
							</p>
						</div>
					</section>
					<section class="row">
						<div class="col-sm-4">
							<a href="{{url()}}">
								<img src="{{url()}}/images/logo.png" alt="" class="img-responsive">
							</a>
						</div>
						<div class="col-sm-8">
							<p class="text-right telefono">
								900 657 453
							</p>
						</div>
					</section>
					<section class="row">
						<div class="col-sm-12">
							<p class="menu text-right">
								<a href="#">
									Qué es Productosonline
								</a>
								<a href="#">
									Por qué nosotros
								</a>
								<a href="#">
									Qué ofrecemos
								</a>
								<a href="#">
									Garantiza tus ventas
								</a>
							</p>
						</div>
					</section>
				</div>
				<div class="visible-xs">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="{{url()}}">
									<img src="{{url()}}/images/logo.png" alt="" class="img-responsive">
								</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<p class="te-llamamos">
									¿Necesitas ayuda para contratar?
									<a href="#" class="te-llamamos">
										<strong>Te llamamos</strong>
									</a>
								</p>
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="#">
											Qué es Productosonline <span class="sr-only">(current)</span>
										</a>
									</li>
									<li>
										<a href="#">
											Por qué nosotros
										</a>
									</li>
									<li>
										<a href="#">
											Qué ofrecemos
										</a>
									</li>
									<li>
										<a href="#">
											Garantiza tus ventas
										</a>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</header>
			@yield('contenido')
			<footer>
				<p class="strong">
					<a href="#">
						Blog
					</a>
					|
					<a href="#">
						Contacto
					</a>
					|
					<a href="#">
						Soporte
					</a>
				</p>
				<hr>
				<p>
					<a href="#">
						Ayuda
					</a>
					|
					<a href="#">
						Términos y condiciones de uso
					</a>
					|
					<a href="#">
						Privacidad y Cookies
					</a>
				</p>
			</footer>
		</section>
			
	</body>
</html>