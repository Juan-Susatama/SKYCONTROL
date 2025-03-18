<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Forgot Password</title>

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
                            <?php
                                use PHPMailer\PHPMailer\PHPMailer;
                                use PHPMailer\PHPMailer\Exception;

                                require 'PHPMailer/Exception.php';
                                require 'PHPMailer/PHPMailer.php';
                                require 'PHPMailer/SMTP.php';
                                
                                include('./conexion.php');
                                $link = conectar();

                                $cor = mysqli_real_escape_string($link, $_REQUEST['correo']);

                                $sql = "SELECT * FROM persona WHERE correo = '$cor'";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result); 
                                
                                if($cor == null){
                                    echo "<script type='text/javascript'>
                                            alert('Ingrese un correo electrónico para recuperar la contraseña.');
                                            window.location.href='forgot-password.php';
                                          </script>";
                                    exit();
                                }
                                
                                if($row['correo'] !== $cor){
                                    echo "<script type='text/javascript'>
                                            alert('Correo electrónico no encontrado. Por favor, intente de nuevo.');
                                            window.location.href='forgot-password.php';
                                          </script>";
                                    exit();
                                }

                                $sql = "SELECT contrasenia FROM persona WHERE correo = '$cor'";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result);  

                                $mail = new PHPMailer(true);

                                try {
                                    //Server settings
                                    $mail->SMTPDebug = 0;
                                    $mail->isSMTP();                                            //Send using SMTP
                                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                    $mail->Username   = 'perseo6758@gmail.com';                     //SMTP username
                                    $mail->Password   = 'qgdq mjmo shdh oxin';                               //SMTP password
                                    $mail->SMTPSecure = 'tls'; 
                                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                
                                    //Recipients
                                    $mail->setFrom('perseo6758@gmail.com', 'SKYCRONTROL');
                                    $mail->addAddress($cor);     //Add a recipient

                                    //Content
                                    $mail->isHTML(true);                                  //Set email format to HTML
                                    $mail->Subject = 'Recuperacion de contraseña SKYCONTROLL';
                                    $mail->Body    = 'Cordial saludo, estimado usuario:
                                        Por favor, evite extraviar su contraseña, ya que usted es un cliente valioso para nosotros. contraseña: ' . $row['contrasenia'];
                                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                
                                    $mail->send();
                                    echo "<script type='text/javascript'>
                                    alert('Por favor revise su correo, le enviaremos su contraseña en breve');
                                    window.location.href='login.php';
                                    </script>";
                                } catch (Exception $e) {
                                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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