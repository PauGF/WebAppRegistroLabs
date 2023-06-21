<?php
	require_once __DIR__ . '/vendor/autoload.php';

	$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
	$fontDirs = $defaultConfig['fontDir'];

	$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
	$fontData = $defaultFontConfig['fontdata'];

	$mpdf = new \Mpdf\Mpdf([
	    'fontDir' => array_merge($fontDirs, [
	        __DIR__ . '/../fonts/',
	    ]),
	    'fontdata' => $fontData + [ // lowercase letters only in font key
	        'montserrat' => [
	            'R' => 'Montserrat-Medium.ttf',
	            'I' => 'Montserrat-Italic-VariableFont_wght.ttf',
	        ]
	    ],
	    'default_font' => 'montserrat'
	]);


	$mpdf->SetHTMLHeader('
		<img src="../images/1.png" alt="header">
	');
	$mpdf->SetHTMLFooter('
		<img src="../images/2.png" alt="footer">
	');
	$stylesheet = file_get_contents('../css/pdf.css');
	$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
	//$text = file_get_contents('report.html');
	
	$title = "
		<div class='section'></div>
		<div class='mainTitle'>
			<span>ENCUESTA DE SATISFACCION DEL ESTUDIANTE</span>
			<br>
			<span>SERVICIOS DE APOYO EDUCATIVO</span>
		</div>
	";

	$tableHead = "
		<div class='div-table-head'>
			<table>
				<tbody>
					<tr>
						<th>Unidad Académica:</th>
						<td>Escuela Superior de Ingeniería Mecánica y Eléctrica (ESIME) Unidad Zacatenco</td>
						<th>Folio No.:</th>
						<td>001</td>
					</tr>
					<tr>
						<th>Trámite o Servicio:</th>
						<td>Préstamo de Equipo Informático</td>
						<th>Fecha:</th>
						<td>20/06/2023</td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$spanCommunity = "
		<div class='div-span-community'>
			<span>¿Qué tipo de Comunidad Politécnica eres?</span>
		</div>
	";

	$tableCommunity = "
		<div class='div-table-community'>
			<table>
				<tbody>
					<tr>
						<td>Comunidad estudiantil</td>
						<td class='cell-sign'></td>
						<td>Comunidad docente</td>
						<td class='cell-sign'></td>
						<td>Comunidad PAAE</td>
						<td class='cell-sign'></td>
						<td>Comunidad egresados</td>
						<td class='cell-sign'></td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$spanWeighing = "
		<div class='div-span-weighing'>
			<span>Del 1 al 5 en donde:</span>
		</div>
	";

	$tableWeighing = "
		<div class='div-table-weighing'>
			<table>
				<tbody>
					<tr>
						<th>Insatisfactorio</th>
						<th>Malo</th>
						<th>Regular</th>
						<th>Bueno</th>
						<th>Satisfactorio</th>
					</tr>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$tableQuestions = "
		<div class='div-table-questions'>
			<table class='table-questions'>
				<tbody>
					<tr>
						<th class='ignore-cell'></th>
						<th text-rotate='90'>Insatisfactorio</th>
						<th text-rotate='90'>Malo</th>
						<th text-rotate='90'>Regular</th>
						<th text-rotate='90'>Bueno</th>
						<th text-rotate='90'>Satisfactorio</th>
					</tr>
					<tr>
						<td class='head-questions'></td>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>1. ¿Cómo consideras el control de acceso a la sala de cómputo?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>2. ¿El encargado del aula de cómputo brinda atención cuando la requieres?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>3. ¿Cómo es la efectividad de los técnicos para resolver los problemas de soporte técnico?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>1. ¿Cómo consideras el control de acceso a la sala de cómputo?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>4. ¿Cómo calificas el servicio a Internet en los equipos de las aulas de cómputo?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>5. ¿Los equipos tienen los programas necesarios para llevar a cabo tus actividades académicas y escolares?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
					<tr>
						<td>6. ¿Consideras que el equipo de cómputo es adecuado para el uso de la comunidad?</td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
						<td class='cell-sign-questions'></td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$tableProgramm = "
		<div>
			<table>
				<tbody>
					<tr>
						<td>De la pregunta 5. ¿Consideras algún programa en específico para realizar tus actividades académicas y escolares?</td>
					</tr>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$tableSuggestions = "
		<div>
			<table class='table-suggestions'>
				<tbody>
					<tr>
						<th>Comentarios, felicitaciones, sugerencias, opiniones y/o quejas:</th>
					</tr>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$spanFooter = "
		<div>
			<table class='table-footer'>
				<tbody>
					<tr>
						<th>¡Su opinión es valiosa!</th>
						<td></td>
						<th>'Gracias por su participación'</th>
					</tr>
				</tbody>
			</table>
		</div>
	";

	$mpdf->WriteHTML($title);
	$mpdf->WriteHTML($tableHead);
	$mpdf->WriteHTML($spanCommunity);
	$mpdf->WriteHTML($tableCommunity);
	$mpdf->WriteHTML($spanWeighing);
	$mpdf->WriteHTML($tableWeighing);
	$mpdf->WriteHTML($tableQuestions);
	$mpdf->WriteHTML($tableProgramm);
	$mpdf->WriteHTML($tableSuggestions);
	$mpdf->WriteHTML($spanFooter);
	$mpdf->Output();
?>