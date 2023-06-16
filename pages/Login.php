
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
		<link href="../css/login.css" rel="stylesheet">
		<!--Script to initializate select-->
		<script src="../js/selectInitializate.js"></script>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<title>Bitácora</title>
	</head>

	<body>
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
		<div class="content">
			<div class="content-left green lighten-1"> 
				<div class="container">
					<div class="select-class">
						<form >
							<div class="input-field col s12">
		                        <select id="selectLabs" name="selectLabs">
		                            <option value="" disabled selected>Seleccione el laboratorio a visualizar</option>
		                            <option selected="selected">Laboratorio de Diseño</option>
		                            <option>Laboratorio de Pabellon</option>
		                        </select>
		                        <label for="selectLabs">Laboratorio</label>
		                    </div>
							<label for="date">Seleccione la fecha</span>
							<input type="date" id="date" name="date">
							<button class="btn waves-effect waves-light" type="submit" name="action">Ver Bitácora
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
								<th>Hora de Entrada</th>
								<th>Hora de salida</th>
								<th>Nombre</th>
								<th>Boleta</th>
								<th>Tipo</th>
								<th>Carrera/Departamento</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
		<!--<JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
	</body>
</html>