<?php 
session_start();

require_once('conexion.php');
if (isset($_GET['logout'])&& $_GET['logout']=="on"){
	session_destroy();
	header('location:index.php');
   }else{
if ($_SESSION['Users'][4]== null){
    header('location: index.php');
}else{
    if ($_SESSION['Users'][2]== 2){
		header("location:index.php");
    }else{
		if ($_SESSION['Users'][1]== 1){
			if(isset($_GET['info']) && $_GET['info']==3){
				?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Industria Canaima</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h1><a href="dashboard.php" class="logo"><strong>Canaima 3</strong></a></h1>
									<ul class="icons">
										<li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span class="label">twitter</span></a></li>
										<li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
										
										</header>
										<p>Características Procesador INTEL Atom N455, 1.6GHz Disco Duro 250Gb, 2,5 Pulgadas, SATA Memoria RAM 1Gb DDR3 Tarjeta Inalámbrica AzureWawe RT8191SE 802.11 B/G/N Pantalla LCD, 10.1 Pulgadas Cámara Web 0,3Mpx Teclado QUERTY Almohadilla Táctil con dos (2) botones (derecho e izquierdo) Batería de Tres (3) celdas, 11V, 2200mAh Lectora de Memoria SD Tres (3) puertos USB 2.0 Un puerto de Red Un puerto VGA Dos (2) puertos audio (Micrófono y Cornetas) Un puerto de carga electrica Boton De encendido Panel LED Sensor de Luz</p>
										<a href="dashboard.php">ver menos detalles</a>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
									<img src="https://www.industriacanaima.gob.ve/static/6db718a8d24b6d67466750377f415815/ee604/Canaima%203.png" alt="Canaima 3">
									</span>
								</section>

							<!-- Section -->
								



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="dashboard.php">noticias</a></li>
										
										
										<li>
											<span class="opener">solicitudes</span>
											<ul>
												<li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>
												<li><a href="solicitudes.php?Soporte">soporte tecnico</a></li>
												
												
											</ul>
										</li>
										<li>
											<span class="opener">web</span>
											<ul>
												<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
												<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
												<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
												<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
												
												
											</ul>
										</li>
										<li><a href="#">Biblioteca digital</a></li>
										
										<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
										<li><a href="http://10.10.0.3/covensol_login.php">siges</a></li>
										<li><a href="canaima.php?logout=on"><font color="red">cerrar sesion</a></li>
									</ul>
								</nav>

								
						</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php 

			}elseif(isset($_GET['info']) && $_GET['info']==4){
				?>
				<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Industria Canaima</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h1><a href="index.html" class="logo"><strong>Canaima 4</strong></a></h1>
									<ul class="icons">
										<li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span class="label">twitter</span></a></li>
										<li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
										
										</header>
										<p>Características Procesador INTEL celeron 847, 1.1GHz Dual Core Disco Duro 320Gb, 2,5 Pulgadas, SATA Memoria RAM 2Gb DDR3 Tarjeta Inalámbrica INTEL Centrino N105 802.11 B/G/N Pantalla LCD, 10.1 Pulgadas Cámara Web 1Mpx, Giratoria de 180° Teclado QUERTY Almohadilla Táctil con dos (2) botones (derecho e izquierdo) Batería de Tres (3) celdas, 10.8V, 2600mAh Lectora de Memoria SD Dos (2) puertos USB 2.0 Un puerto de USB/HDMI Un puerto de Red Un puerto VGA Dos (3) puertos audio (Micrófono, Cornetas y Audífonos) Un puerto de carga electrica Boton De encendido Panel LED Sensor de Luz</p>
										<a href="dashboard.php">ver menos detalles</a>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
									<img src="https://www.industriacanaima.gob.ve/static/41e87285ee25f6602c63c301f491ae53/ee604/Canaima%204.png" alt="Canaima 4">
									</span>
								</section>

							<!-- Section -->
								



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="dashboard.php">noticias</a></li>
										
										
										<li>
											<span class="opener">solicitudes</span>
											<ul>
												<li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>
												<li><a href="solicitudes.php?Soporte">soporte tecnico</a></li>
												
												
											</ul>
										</li>
										<li>
											<span class="opener">web</span>
											<ul>
												<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
												<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
												<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
												<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
												
												
											</ul>
										</li>
										<li><a href="#">BiBlioteca digital</a></li>
										
										<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
										<li><a href="http://10.10.0.3/covensol_login.php">siges</a></li>
										<li><a href="canaima.php?logout=on"><font color="red">cerrar sesion</a></li>
									</ul>
								</nav>

							
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php

			}elseif(isset($_GET['info']) && $_GET['info']==5){
				?>
				<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Industria Canaima</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h1><a href="index.html" class="logo"><strong>Canaima 5</strong></a></h1>
									<ul class="icons">
										<li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span class="label">twitter</span></a></li>
										<li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
										
										</header>
										<p>Características Procesador INTEL celeron N2805, 1.4GHz Dual Core, Tecnologia INTEL Bay Trail Disco Duro 320Gb, 2,5 Pulgadas, SATA Memoria RAM 2Gb DDR3 Tarjeta Inalámbrica AzureWave RTL8723BENF 802.11 B/G/N Pantalla LCD, 10.1 Pulgadas Cámara Web 1Mpx, Giratoria de 180° Teclado QUERTY Almohadilla Táctil con dos (2) botones (derecho e izquierdo) Batería de dos (2) celdas, 7.4V, 3200mAh Lectora de Memoria SD Un puertos USB 2.0 Un puertos USB 2.0 Un puerto de Red Un puerto de HDMI Un puerto audio (Micrófono y Cornetas) Un puerto de Carga Eléctrica Boton De encendido Panel LED</p>
										<a href="dashboard.php">ver menos detalles</a>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
									<img src="https://www.industriacanaima.gob.ve/static/724483c8810465f5e3ad23ad0535ef66/ee604/Canaima%205.png" alt="Canaima 5">
									</span>
								</section>

							<!-- Section -->
								



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="dashboard.php">noticias</a></li>
										
										
										<li>
											<span class="opener">solicitudes</span>
											<ul>
												<li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>
												<li><a href="solicitudes.php?Soporte">soporte tecnico</a></li>
												
												
											</ul>
										</li>
										<li>
											<span class="opener">web</span>
											<ul>
												<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
												<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
												<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
												<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
												
												
											</ul>
										</li>
										<li><a href="#">BiBlioteca digital</a></li>
										
										</li>
										<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
										<li><a href="http://10.10.0.3/covensol_login.php">siges</a></li>
										<li><a href="canaima.php?logout=on"><font color="red">cerrar sesion</a></li>
									</ul>
								</nav>

							
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html><?php
			}else{
				header('location:dashboard.php');
			}
		}else{
			header('location:dashboard.php');
		}}}}
?>