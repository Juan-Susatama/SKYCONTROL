<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
   
    td, th {
    font-family: 'Courier New', Courier, monospace;
    border: 1px solid black;
    padding: 8px;
    text-align: center;
    }

    .general {
    background-color: #7f7f7f;
    font-weight: bold;
    }

    .tituloSky {
    font-family: 'Courier New', Courier, monospace;
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-bottom: 2px solid #4e73df;
    padding-bottom: 10px;
    }
    </style>

    <title>SkyControl - Informe</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/Styles.css" rel="stylesheet" type="text/css">
    <link href="Styles2.css" rel="stylesheet" type="text/css">
</head>
<?php
    $tiempo_reporte=$_REQUEST['tiempo_reporte'];
    $usuario_reporte=$_REQUEST['usuario_reporte'];
?>
<body>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="tituloSky">Informe SkyControl</h1>
                <?php echo "<h1 style='text-align: center;'>" .$usuario_reporte. "s " .$tiempo_reporte. "</h1>"; ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <?php
                            include('./conexion.php');
                            $link = conectar();

                            if ($tiempo_reporte == 'semanal') {
                                if ($usuario_reporte == 'piloto'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Horas de vuelo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, piloto.*, vuelo.* FROM persona INNER JOIN piloto ON persona.cedula = piloto.cedula 
                                            INNER JOIN vuelo ON piloto.cedula = vuelo.cedula_piloto WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['horas_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'miembro'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, miembro_tripulacion.*, vuelo.*, asignacion_vuelo_tripulacion.* FROM persona INNER JOIN miembro_tripulacion 
                                            ON persona.cedula = miembro_tripulacion.cedula INNER JOIN asignacion_vuelo_tripulacion
                                            ON miembro_tripulacion.cedula =  asignacion_vuelo_tripulacion.cedula 
                                            INNER JOIN vuelo ON asignacion_vuelo_tripulacion.num_vuelo  = vuelo.num_vuelo
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'vuelo'){
                                    echo "<thead>
                                        <tr>
                                            <th>Numero de vuelo</th>
                                            <th>Origen</th>
                                            <th>Destino</th>
                                            <th>Hora</th>
                                            <th>Fecha</th>
                                            <th>Piloto</th>
                                            <th>Avion</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT * FROM vuelo  
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['origen']) . "</th>
                                                <th>". htmlspecialchars($row['destino']) . "</th>
                                                <th>". htmlspecialchars($row['hora']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                                <th>". htmlspecialchars($row['cedula_piloto']) . "</th>
                                                <th>". htmlspecialchars($row['codigo_avion']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'pasajero'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, pasaje.*, vuelo.* FROM persona INNER JOIN pasaje ON persona.cedula = pasaje.cedula_persona 
                                            INNER JOIN vuelo ON pasaje.num_vuelo = vuelo.num_vuelo 
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'mantenimiento'){
                                    echo "<thead>
                                        <tr>
                                            <th>Codigo avión</th>
                                            <th>Tipo</th>
                                            <th>Fecha de revisión</th>
                                            <th>Base</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT avion.*, mantenimiento.* FROM avion INNER JOIN mantenimiento ON avion.codigo = mantenimiento.codigoavion  
                                            WHERE mantenimiento.fecha_revision BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['codigo']) . "</th>
                                                <th>". htmlspecialchars($row['tipo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha_revision']) . "</th>
                                                <th>". htmlspecialchars($row['nombrebase']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                            }
                            
                            if($tiempo_reporte == 'mensual'){
                                if ($usuario_reporte == 'piloto'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Horas de vuelo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, piloto.*, vuelo.* FROM persona INNER JOIN piloto ON persona.cedula = piloto.cedula 
                                            INNER JOIN vuelo ON piloto.cedula = vuelo.cedula_piloto WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()";
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['horas_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'miembro'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, miembro_tripulacion.*, vuelo.*, asignacion_vuelo_tripulacion.* FROM persona INNER JOIN miembro_tripulacion 
                                            ON persona.cedula = miembro_tripulacion.cedula INNER JOIN asignacion_vuelo_tripulacion
                                            ON miembro_tripulacion.cedula =  asignacion_vuelo_tripulacion.cedula 
                                            INNER JOIN vuelo ON asignacion_vuelo_tripulacion.num_vuelo  = vuelo.num_vuelo
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'vuelo'){
                                    echo "<thead>
                                        <tr>
                                            <th>Numero de vuelo</th>
                                            <th>Origen</th>
                                            <th>Destino</th>
                                            <th>Hora</th>
                                            <th>Fecha</th>
                                            <th>Piloto</th>
                                            <th>Avion</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT * FROM vuelo  
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['origen']) . "</th>
                                                <th>". htmlspecialchars($row['destino']) . "</th>
                                                <th>". htmlspecialchars($row['hora']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                                <th>". htmlspecialchars($row['cedula_piloto']) . "</th>
                                                <th>". htmlspecialchars($row['codigo_avion']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'pasajero'){
                                    echo "<thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Numero de vuelo</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT persona.*, pasaje.*, vuelo.* FROM persona INNER JOIN pasaje ON persona.cedula = pasaje.cedula_persona 
                                            INNER JOIN vuelo ON pasaje.num_vuelo = vuelo.num_vuelo 
                                            WHERE vuelo.fecha BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['cedula']) . "</th>
                                                <th>". htmlspecialchars($row['nombre']) . "</th>
                                                <th>". htmlspecialchars($row['apellido']) . "</th>
                                                <th>". htmlspecialchars($row['correo']) . "</th>
                                                <th>". htmlspecialchars($row['num_vuelo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                                if ($usuario_reporte == 'mantenimiento'){
                                    echo "<thead>
                                        <tr>
                                            <th>Codigo avión</th>
                                            <th>Tipo</th>
                                            <th>Fecha de revisión</th>
                                            <th>Base</th>
                                        </tr>
                                    </thead>";
                                    $sql = "SELECT avion.*, mantenimiento.* FROM avion INNER JOIN mantenimiento ON avion.codigo = mantenimiento.codigoavion  
                                            WHERE mantenimiento.fecha_revision BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()";

                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>
                                            <tr>
                                                <th>". htmlspecialchars($row['codigo']) . "</th>
                                                <th>". htmlspecialchars($row['tipo']) . "</th>
                                                <th>". htmlspecialchars($row['fecha_revision']) . "</th>
                                                <th>". htmlspecialchars($row['nombrebase']) . "</th>
                                            </tr>
                                        </tbody>";
                                    }
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
    use Dompdf\Dompdf;
    $html = ob_get_clean();
    //echo $html;

    require 'dompdf/autoload.inc.php';
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled', true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A3', 'landscape');

    $dompdf->render();

    $dompdf->stream("Informe_SkyControll.pdf", array("Attachment" => false));
?>
</body>
</html>