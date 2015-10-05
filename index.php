<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cherry Bakery</title>
	<link rel="stylesheet" href="shared/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="shared/img/slider/themes/default/default.css" type="text/css" />
	<link rel="stylesheet" href="shared/css/nivo-slider.css">
</head>
<body>
	<header>
		<h1><a href="index.php"><img src="shared/img/cherryLogo.png" width="100%"  alt="Cherry Bakery logo"></a><span>Cherry Bakery</span><strong>MATERIAS PRIMAS</strong></h1>
		<nav>
			<div class="redes">
				<a href="#" target="_blank"><div class="redIcon facebook"></div></a>
				<a href="#" target="_blank"><div class="redIcon twitter"></div></a>
				<a href="#" target="_blank"><div class="redIcon gplus"></div></a>
				<a href="#" target="_blank"><div class="redIcon youtube"></div></a>
			</div>
			<ul class="nav">
				<li class="menuItem"><a href="#.php">NOSOTROS</a></li>
				<li class="sm-trigger menuItem"><a href="#.php">PRODUCTOS</a>
					<div class="submenu">
						<ul class="sm-col list barRight">
							<li><a href="#">Margarinas</a></li>
							<li><a href="#">Mermeladas</a></li>
							<li><a href="#">Coberturas</a></li>
							<li><a href="#">Polvos para Hornear</a></li>
							<li><a href="#">Mejorantes</a></li>
							<li><a href="#">Escencias</a></li>
							<li><a href="#">Grenetinas</a></li>
						</ul>
						<ul class="sm-col list">
							<li><a href="#">Margarinas</a></li>
							<li><a href="#">Mermeladas</a></li>
							<li><a href="#">Coberturas</a></li>
							<li><a href="#">Polvos para Hornear</a></li>
							<li><a href="#">Mejorantes</a></li>
							<li><a href="#">Escencias</a></li>
							<li><a href="#">Grenetinas</a></li>
						</ul>
						<ul class="sm-col">
							<img id="imagenSubmenu" width="100%" src="shared/img/imagenMargarina.jpg" alt="">
						</ul>
					</div>	
				</li>
				<li class="menuItem"><a href="#.php">CURSOS</a></li>
				<li class="menuItem"><a href="#.php">VIDEORECETAS</a></li>
				<li class="menuItem"><a href="#.php">CONTACTO</a></li>
			</ul>
		</nav>
	</header>
	<div id="plecaRoja"></div>
	<main>
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<img src="shared/img/slider/slideEX.jpg"  alt="">
				<img src="shared/img/slider/slide2.jpg"  alt="">
			</div>
		</div>
		
		<section class="cursosZone">
			<div class="btnClientesSC" id="btn-Cursos">
				<h2>CURSOS PRACTIVOS
				<i class="fa fa-plus iconMas"></i></h2>
				
			</div>
			<div class="btnClientesSC" id="btn-Demos">
				<h2>DEMOSTRACIONES
				<i class="fa fa-plus iconMas"></i>
				</h2>
				
			</div>
		</section>
		<section class="bannersZone">
			<img src="shared/img/bannerA.jpg" alt="Cherry Bakery" width="100%">
			<img src="shared/img/bannerB.jpg" alt="Cherry Bakery" width="100%">
		</section>
	</main>
	<aside class="subscribeZone">
		<div class="iw">
			<div class="copy">
				<i class="fa fa-envelope d_ib cartaHome"></i>
				<p class="d_ib">
					SUSCRIBETE A NUESTRO BOLETÍN para recibir noticias, <br> promociones y muchas cosas más. 
				</p> 
			</div>
			<div class="inputZone">
				<form action="">
					<input class="newsMail" name="newsCorreo" placeholder="INGRESA TU EMAIL" type="text">
					<!-- <input type="submit" placeholder="SUSCRIBIRSE"> -->
					<button class="newsButton" type="button" return false>SUSCRIBIRSE</button>
				</form>
			</div>
		</div>
	</aside>
	<footer>
		<div class="iw">	
			<div class="leftCol">
				<img src="shared/img/cherryLogo.png" class="logoFooter" alt="Cherry Bakery logo">
				<div class="sucursalWrapper">
					<h6>CHERRY BAKERY SUCURSAL NEZA</h6>
					<P class="dir">
						Av. Pantitlan No. 156, Col. México 2, Nezahualcoyotl Edo. de México. C.P.57620.
					</P>
					<p  class="tels">
						Tels.: 5765-4370 / 2232-8424 / 5765-4372 / 2619-9715
					</p>
				</div>
				<div class="sucursalWrapper">
					<h6>CHERRY BAKERY SUCURSAL CENTRO</h6>
					<P class="dir">
						Calle Americas No.118, Colonia Moderna Delegación Benito Juarez, CP. 03510					</P>
					<p  class="tels">
						Tels.: 5590-9865 / 5590-9297 / 5590-9318 
					</p>
				</div>

			</div>
			<div class="rightCol">
				
			</div>
		</div>	
		<p class="legales top">Todos los Derechos Reservados a www.cherrybakery.com 2012 Cherry Bakery ®</p>
		<p class="legales">El contenido en este sitio es de uso exclusivo del mismo y no puede ser manipulado ni utilizado sin la autorización de su registrante. "Conoce el Aviso de Privacidad"</p>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="shared/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="shared/js/main.js"></script>
</body>
</html>