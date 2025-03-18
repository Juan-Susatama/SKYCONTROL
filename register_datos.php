<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Datos de tu nueva cuenta!</h1>
                            </div>
                            <?php
                                include('./conexion.php');
                                $link = conectar();

                                $ced = mysqli_real_escape_string($link, $_REQUEST['cedula']);
                                $nom = mysqli_real_escape_string($link, $_REQUEST['nombre']);
                                $apel = mysqli_real_escape_string($link, $_REQUEST['apellido']);
                                $cor = mysqli_real_escape_string($link, $_REQUEST['correo']);
                                $pass = mysqli_real_escape_string($link, $_REQUEST['password']);
                                $ce_pass = mysqli_real_escape_string($link, $_REQUEST['confirmar_password']);
                                $rol = 'usuario';

                                if($ced == null or $nom == null or $apel == null or $cor == null or $pass == null or $ce_pass == null){
                                    echo "<script type='text/javascript'>
                                            alert('Por favor digite todos los campos para generar su cuenta de SkyControll.');
                                            window.location.href='register.php';
                                          </script>";
                                    exit();
                                }

                                if ($pass != $ce_pass) {
                                    echo "<script type='text/javascript'>
                                            alert('Las contraseñas no coinciden. Por favor, intente de nuevo.');
                                            window.location.href='register.php';
                                          </script>";
                                    exit(); 
                                }

                                $sql = "SELECT cedula FROM persona WHERE cedula = '$ced'";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) >= 1) { 
                                    echo "<script type='text/javascript'>
                                        alert('La cedula ya esta asignada a un usuario. Por favor, ingrese otra.');
                                        window.location.href='register.php';
                                    </script>";
                                    exit();
                                } 

                                $sql = "INSERT INTO persona (cedula, nombre, apellido, correo, contrasenia, rol) 
                                        VALUES ('$ced', '$nom', '$apel', '$cor', '$pass','$rol')";

                                if (mysqli_query($link, $sql)) {
                                    echo "<script type='text/javascript'>
                                            alert('Gracias por registrarte 😁');
                                            window.location.href='login.php';
                                          </script>";
                                } else {
                                    echo "<script type='text/javascript'>
                                            alert('Error en la consulta: " . mysqli_error($link) . "');
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