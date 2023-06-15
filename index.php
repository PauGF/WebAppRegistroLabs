<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!--CSS Paulina-->
		<link href="css/index.css" rel="stylesheet">
		<link href="css/nav.css" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<title>Estadísticas UDI</title>
	</head>
	<body>
		<div class="navbar-fixed div-nav">
			<nav class="green darken-1 nav-class">
				<img class="logo left" src="images/ipn.png" alt="IPN" title="LOGO IPN">
				<img class="logo right" src="images/esime.png" alt="ESIME" title="LOGO ESIME">
				<div class="nav-wrapper">
					<div class="title-nav-content">
						<span class="title-IPN">Instituto Politécnico Nacional</span>
						<span class="title-ESIME">Escuela Superior de Ingeniería Mecánica y Eléctrica Zacatenco</span>
						<span class="title-UDI">Unidad de Informática</span>
					</div>
			    </div>

			</nav>
		</div>
		<!--<header id="main-header"> 

			<div>
				<img id="logo-ipn" src="images/ipn.png" alt="IPN" title="LOGO IPN">
				<img id="logo-esime" src="images/esime.png" alt="ESIME" title="LOGO ESIME"><br>
			</div>
			INSTITUTO POLITECNICO NACIONAL <br>
			UDI ESIME ZACATENCO <br>
		</header>-->
		<div class="content">
			<div class="counters">
				<span>
					<?php
						echo date("d/m/Y");
					?>
				</span>
				<span>Laboratorio de Diseño</span>
				<output name="result" >000</output>
				<span>Laboratorio de Pabellón</span>
				<output name="result" >000</output>
			</div>
			<div class="information">
				<section id="main-content">
					<header>
					<h1>Lorem ipsum dolor sit amet</h1>
					</header>

					<div class="text-p">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<button onclick="location.href = 'pages/statistics.php';" class="button-class" name="statistics" >Estadísticas</button>
					<button onclick="location.href = 'pages/suggestions.php';" class="button-class" name="suggestions">Sugerencias / Programas</button>
					<button onclick="location.href = 'pages/login.php'" class="button-class" name="login">Bitacora de Ingreso </button>
				</section>
			</div>
		</div>
		<!--<JavaScript at end of body for optimized loading-->
    	<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>	  
</html>