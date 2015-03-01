@extends("layouts/master")
@section('contenido')

<section class="row fondo-home">
	<div class="col-lg-offset-7 col-lg-5 col-sm-offset-6 col-sm-6">
		<h2>
			<br class="hidden-xs">
			Gestiona tus canales de venta sin problemas
			<br>
			<small>
				No te conformes con vender solo a través de tu tienda online, únete a portales como Ebay
			</small>
		</h2>
		<p>
			<span class="hidden-xs"><br><br><br></span>
			<img src="{{url()}}/images/logos.png" alt="">
			<span class="hidden-xs"><br><br><br><br></span>
		</p>
	</div>
</section>
<h2 class="text-center">
	Todo lo que necesitas para vender en internet.
	<br><br>
	<small>
		La forma más sencilla y rápida de crear tu comercio electrónico,<br>
		Productoonline.es tiene todo lo que necesitas.
	</small>
</h2>
<br>
<section class="row">
	<div class="col-sm-3 text-center">
		<div class="borde-circulo center-block">
			<img class="img-responsive" src="{{url()}}/images/iconos/productos.png" alt="">
		</div>
		<br>
		Añade y edita productos
		<br>
		<img src="{{url()}}/images/iconos/icono-mas.png" alt="">
		<br>
	</div>
	<div class="col-sm-3 text-center">
		<div class="borde-circulo center-block">
			<img class="img-responsive center-block" src="{{url()}}/images/iconos/categorias.png" alt="">
		</div>
		<br>
		Añade categorías
		<br>
		<img src="{{url()}}/images/iconos/icono-mas.png" alt="">
		<br>
	</div>
	<div class="col-sm-3 text-center">
		<div class="borde-circulo center-block">
			<img class="img-responsive center-block" src="{{url()}}/images/iconos/ventas.png" alt="">
		</div>
		<br>
		Controla tus ventas
		<br>
		<img src="{{url()}}/images/iconos/icono-mas.png" alt="">
		<br>
	</div>
	<div class="col-sm-3 text-center">
		<div class="borde-circulo center-block">
			<img class="img-responsive center-block" src="{{url()}}/images/iconos/clientes.png" alt="">
		</div>
		<br>
		Ver clientes y pedidos online
		<br>
		<img src="{{url()}}/images/iconos/icono-mas.png" alt="">
		<br>
	</div>
</section>
@stop