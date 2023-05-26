<?php
$string =  '<!DOCTYPE html>'.
'html lang="es">'.
'<head>'.
'   <link href="../css/styless.css" rel="stylesheet">'.
'   <meta http-equiv="content-type" content="text/html; charset=UTF-8">'.
'   <title>Estadisticas</title>'.
'   <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>'.
'/head>'.
'<body>'.
'    <div id="contenedor">'.
'     <div id="contenedor-form"> '.
'<form >'.
'<h3>Seleccione el periodo de tiempo</h3>'.
' 		<select>'.
' 			<option>DIA</option>'.
' 			<option selected="selected">MES</option>'.
' 			<option>AÑO</option>	'.
'		</select>'.
'	'.
''.
'<h3>Seleccione el laboratorio</h3>'.
'		<select>'.
' 			<option selected="selected">Laboratorio de Diseño</option>'.
' 			<option>Laboratorio de Pabellon</option>	'.
'		</select>'.
''.
'<br>'.
'<h3>Preguntas</h3>'.
'<ol>'.
' 		<li>¿Cómo consideras el control de acceso a la sala de cómputo?</li><br>'.
' 		<li>¿El encargado del aula de cómputo brinda atención cuado la requieres?</li><br>'.
'		<li>¿Cómo es la efectividad de los técnicos para resolver los problemas de soporte técnico?</li><br>'.
'		<li>¿Cómo calificas el servicio a Internet en los equipos de las aulas de cómputo?</li><br>'.
'		<li>¿Los equipos tienen los programas necesarios para llevar a cabo tus actividades acedémicas y escolares?</li><br>'.
'		<li>¿Consideras que el equipo de cómputo es adecuado para el uso de la comunidad?</li><br>'.
'</ol>'.
'	<br>'.
'br>'.
''.
'<a href=\'../"EstadísticasUDI.php"\'><button id="home" name="home" >Inicio</button></a><br>'.
'<br>'.
'/form>'.
'/div>   '.
'div id="contenedor-grafica">'.
'!--Grafica de estrella-->'.
'canvas id="chart1" ></canvas>'.
'   <script src="../scripts/graph.js"></script>'.
'   </div> '.
'   </div>'.
'/body>'.
'</html>';

 echo $string; 
?>
