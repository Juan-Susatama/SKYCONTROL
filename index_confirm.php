<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/Styles.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-primary">
<?php
session_start();
?>
    <div class="container">
     <div class="row justify-content-center">
     <div class="col-xl-10 col-lg-12 col-md-9">   
      <div class="card1" style="width: 900px; height: 480px;">
        <div class="card2 o-hidden border-0 shadow-lg my-5" style="width: 900px; height: 480px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="portada">
                    <img src="img/Imagen avion.png">
                </div>
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <?php
                                include('./conexion.php');
                                $link = conectar();

                                $ced = mysqli_real_escape_string($link, $_REQUEST['cedula']);
                                $pass = mysqli_real_escape_string($link, $_REQUEST['password']);
                                
                                $sql = "SELECT nombre FROM persona WHERE cedula = '$ced'";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) == 0) { 
                                    echo "<script type='text/javascript'>
                                            alert('El número de cédula no existe. Por favor, intente de nuevo.');
                                            window.location.href='login.php';
                                          </script>";
                                    exit();
                                } 

                                if($ced == null or $pass == null){
                                    echo "<script type='text/javascript'>
                                            alert('Ingrese un número de cédula o contraseña para iniciar sesión.');
                                            window.location.href='login.php';
                                          </script>";
                                    exit();
                                }

                                $sql = "SELECT contrasenia FROM persona WHERE cedula = '$ced'";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result);  

                                if ($row['contrasenia'] !== $pass) {  
                                    echo "<script type='text/javascript'>
                                            alert('Contraseña incorrecta. Por favor, intente de nuevo.');
                                            window.location.href='login.php';
                                          </script>";
                                    exit();
                                }
                                
                                $sql = "SELECT rol FROM persona WHERE cedula = '$ced'";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result);  
                                
                                if($row['rol'] == 'admin'){
                                    echo "<script type='text/javascript'>window.location.href='index.php'
                                    </script>";
                                }

                                if($row['rol'] == 'usuario' or $row['rol'] == 'piloto' or $row['rol'] == 'miembro_tripulacion'){
                                    echo "<script type='text/javascript'>window.location.href='index_usuarios.php'
                                    </script>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</body>
</html>

<?php
$_SESSION['cedula'] = $_POST['cedula'];
exit();
?>