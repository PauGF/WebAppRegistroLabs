
<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>        
        <!--CSS Paulina-->
        <link href="../css/statistics.css" rel="stylesheet">
        <link href="../css/nav.css" rel="stylesheet">
        <!--Script graphs-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        
        <title>Estadísticas</title>
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
            <div class="content-form green lighten-1">
                <div class="container">
                    <div class="select-class">
                        <div class="input-field col s12">
                            <select id="selectTime" name="selectTime">
                                <option value="" disabled selected>Seleccione el período de tiempo</option>
                                <option>Día</option>
                                <option selected="selected">Mes</option>
                                <option>Año</option>
                            </select>
                            <label for="selectTime">Período de reporte</label>
                        </div>
                        <div class="input-field col s12">
                            <select id="selectLabs" name="selectLabs">
                                <option value="" disabled selected>Seleccione el laboratorio a visualizar</option>
                                <option selected="selected">Laboratorio de Diseño</option>
                                <option>Laboratorio de Pabellon</option> 
                            </select>
                            <label for="selectLabs">Laboratorio</label>
                        </div>
                        <form>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ver Reporte
                            <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                    <div class="questions-class">
                        <span>Preguntas</span>
                        <ol>
                            <li>¿Cómo consideras el control de acceso a la sala de cómputo?</li>
                            <li>¿El encargado del aula de cómputo brinda atención cuado la requieres?</li>
                            <li>¿Cómo es la efectividad de los técnicos para resolver los problemas de soporte técnico?</li>
                            <li>¿Cómo calificas el servicio a Internet en los equipos de las aulas de cómputo?</li>
                            <li>¿Los equipos tienen los programas necesarios para llevar a cabo tus actividades acedémicas y escolares?</li>
                            <li>¿Consideras que el equipo de cómputo es adecuado para el uso de la comunidad?</li>
                        </ol>
                        <a href="../index.php" class="waves-effect waves-light btn button-class">Inicio</a>
                    </div>
                </div>
            </div>   
            <div class="content-graph">
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
                <!--Grafica de estrella-->
                <canvas id="chart1"></canvas>
                <script src="../scripts/graph.js"></script>
            </div> 
        </div>
        <!--<JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>