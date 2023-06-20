<!DOCTYPE html>
<html lang="es">
	<head>
		<!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--CSS Paulina-->
	    <link href="../css/nav.css" rel="stylesheet">
	    <link href="../css/commonReport.css" rel="stylesheet">
	    <link href="../css/suggestions.css" rel="stylesheet">
	    <!--Script to initializate select-->
	    <script src="../js/selectInitializate.js"></script>
	    <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

	    <title>Sugerencias</title>
	</head>

	<body>
		<header>
			<div class="navbar-fixed div-nav">
	            <nav class="green darken-1 nav-class">
	                <img class="logo left" src="../images/ipn.png" alt="IPN" title="LOGO IPN">
	                <img class="logo right" src="../images/esime.png" alt="ESIME" title="LOGO ESIME">
	                <div class="nav-wrapper">
	                    <div class="title-nav-content">
	                        <span class="title-IPN">Instituto Politécnico Nacional</span>
	                        <span class="title-ESIME">Escuela Superior de Ingeniería Mecánica y Eléctrica Zacatenco</span>
	                        <span class="title-UDI">Unidad de Informática</span>
	                    </div>
	                </div>

	            </nav>
	        </div>
		</header>
		<main>
			<div class="content">
				<div class="content-left green lighten-1">
					<div class="container">
						<div class="select-class"> 
							<form>
								<div class="input-field col s12">
			                        <select id="selectLabs" name="selectLabs">
			                            <option value="" disabled selected>Seleccione el laboratorio a visualizar</option>
			                            <option selected="selected">Laboratorio de Diseño</option>
			                            <option>Laboratorio de Pabellon</option>
			                        </select>
			                        <label for="selectLabs">Laboratorio</label>
			                    </div>
						 		<div class="input-field col s12">
			                        <select id="selectOpt" name="selectOpt">
			                            <option value="" disabled selected>Seleccione una opción</option>
			                            <option selected="selected">Sugerencias</option>
			                            <option>Programas</option> 
			                        </select>
			                        <label for="selectOpt">Sugerencias/Programas</label>
			                    </div>
								<button class="btn waves-effect waves-light" type="submit" name="action">Ver Reporte
	                            <i class="material-icons right">send</i>
	                            </button>
							</form>
						</div>
						<a href="../index.php" class="waves-effect waves-light btn button-class">Inicio</a>
					</div>
				</div>
				<div class="content-right">
					<div class="container">
	                    <table>
	                        <thead>
	                            <tr>
	                                <th>Alumnos</th>
	                                <th>Docentes</th>
	                                <th>PAAE</th>
	                                <th>Egresados</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td><output name="alumnos">0</output><br></td>
	                                <td><output name="docentes">0</output><br></td>
	                                <td><output name="paae" >0</output><br></td>
	                                <td><output name="egresados">0</output><br></td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>
					<table>
						<thead>
							<tr>
								<th id="fecha">Fecha</th>
								<th id="texto">Sugerencias/Programas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
			    </div> 
		    </div>
		</main>
	    <!--<JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
	</body>
</html>