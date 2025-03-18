<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SkyControl - Pagina principal</title>

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

<body id="page-top">

<?php
    session_start();
    $ced = $_SESSION['cedula'];
?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_usuarios.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
                        <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.35 4.35 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0M7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1s.458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7z"/>
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3">SkyControl</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index_usuarios.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                    </svg>
                    <span>Pagina Principal</span></a>
            </li>

            <!-- Divider 
            <hr class="sidebar-divider">-->

            

            <br>

            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Interface
            </div>-->

            <!-- Nav Item - Pages Collapse Menu 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider 
            <hr class="sidebar-divider"> -->

            <!-- Heading 
            <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts 
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables 
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider 
            <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                        include('./conexion.php');
                                        $link = conectar();

                                        $sql = "SELECT nombre FROM persona WHERE cedula = '$ced'";
                                        $sql2 = "SELECT apellido FROM persona WHERE cedula = '$ced'";
                                        $result = mysqli_query($link, $sql);
                                        $result2 = mysqli_query($link, $sql2);
                                        if ($result && mysqli_num_rows($result) > 0 and $result2 && mysqli_num_rows($result2) > 0) {
                                            $row = mysqli_fetch_assoc($result); 
                                            $row2 = mysqli_fetch_assoc($result2); 
                                            echo "". htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') ." ". htmlspecialchars($row2['apellido'], ENT_QUOTES, 'UTF-8').""; 
                                        } else {
                                            echo "<h6>Nombre no encontrado</h6>";
                                        }
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil_usuario.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pagina principal</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>
                </div> 

                <div class="row">
                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Proximos vuelos</h6>
                            </div>
                            <div class="card-body">
                                <!--<div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="...">
                                </div>
                                <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                    constantly updated collection of beautiful svg images that you can use
                                    completely free and without attribution!</p>
                                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                    unDraw →</a>-->
                                <div class="search">
                                    <div style="margin-bottom: 20px;">
                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Últimos 3 vuelos hasta la fecha actual</h5>
                                        <?php
                                            $sql = "SELECT * FROM vuelo WHERE CONCAT(fecha, ' ', hora) >= NOW() ORDER BY fecha ASC, hora ASC LIMIT 3";
                                            $result = mysqli_query($link, $sql);

                                            if (mysqli_num_rows($result) > 0)  {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<div class='flight-box'>";
                                                    echo "<p>Código: <strong>" . htmlspecialchars($row['num_vuelo']) . "</strong></p>";
                                                    echo "<p>Origen/Destino: <strong>" . htmlspecialchars($row['origen']) . " / " . htmlspecialchars($row['destino']) . "</strong></p>";
                                                    echo "<p>Fecha: <strong>" . htmlspecialchars($row['fecha']) . "</strong></p>";
                                                    echo "<p>Hora: <strong>" . htmlspecialchars($row['hora']) . "</strong></p>";
                                                    echo "</div>";
                                                }
                                            }else {
                                                echo "<p>No hay vuelos próximos programados.</p>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Approach 
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                            </div>
                            <div class="card-body">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class="mb-0">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
                        </div> -->
    
                    </div>
    
                    <div class="col-lg-6 mb-4">
    
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Consulte su vuelo</h6>
                            </div>
                            <div class="card-body">
                                <!--<div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="...">
                                </div>
                                <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                    constantly updated collection of beautiful svg images that you can use
                                    completely free and without attribution!</p>
                                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                    unDraw →</a>-->   
                                
                                <form method="post">
                                    <input type="hidden" name="formulario" value="buscar_vuelo">
                                    <div class="search">
                                        <input placeholder="Digite el codigo del vuelo" type="number" name="input_numero_vuelo">
                                        <button type="submit">Buscar</button>
                                    </div>
                                </form>

                                <div>
                                    <?php
                                        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['formulario'] === 'buscar_vuelo') {
                                            $input_numero_vuelo = isset($_POST['input_numero_vuelo']) ? $_POST['input_numero_vuelo'] : null;

                                            if (!empty($input_numero_vuelo)){

                                                $sql = "SELECT * FROM vuelo WHERE num_vuelo = '$input_numero_vuelo'";
                                                $result = mysqli_query($link, $sql);

                                                if (mysqli_num_rows($result) == 0) { 
                                                    echo "<script type='text/javascript'>
                                                        alert('El numero de vuelo no existe. Por favor, ingrese otro.');
                                                        window.location.href='index_usuarios.php';
                                                    </script>";
                                                    exit();
                                                }else{
                                                    $row = mysqli_fetch_assoc($result);
                                                    $numero_encontrado = $row['num_vuelo'];
                                                    $origen_encontrado = $row['origen'];
                                                    $destino_encontrado = $row['destino'];
                                                    $hora_encontrada = $row['hora'];
                                                    $fecha_encontrada = $row['fecha'];
                                                    $piloto_encontrado = $row['cedula_piloto'];
                                                    $avion_encontrado = $row['codigo_avion'];

                                                    echo '<div class="search" style="padding-top: 30px;">
                                                        <div style="margin-bottom: 20px;">
                                                            <h5 class="txt_crud" style="margin-bottom: 5px;">Numero de vuelo</h5>
                                                            <input type="text" value="' . htmlspecialchars($numero_encontrado) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Origen</h5>
                                                        <input type="text" value="' . htmlspecialchars($origen_encontrado) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Destino</h5>
                                                        <input type="text" value="' . htmlspecialchars($destino_encontrado) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Hora</h5>
                                                        <input type="text" value="' . htmlspecialchars($hora_encontrada) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Fecha</h5>
                                                        <input type="text" value="' . htmlspecialchars($fecha_encontrada) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Piloto</h5>
                                                        <input type="text" value="' . htmlspecialchars($piloto_encontrado) . '" readonly>
                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                        <h5 class="txt_crud" style="margin-bottom: 5px;">Avion</h5>
                                                        <input type="text" value="' . htmlspecialchars($avion_encontrado) . '" readonly>
                                                        </div>
                                                        </div>';
                                                } 
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
    
                        <!-- Approach 
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                            </div>
                            <div class="card-body">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class="mb-0">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
                        </div>-->
    
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione «Cerrar Sesión» a continuación si desea finalizar la sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>