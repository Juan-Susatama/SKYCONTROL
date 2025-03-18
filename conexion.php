<?php
function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "pwaeropuertobd";

    // Intenta conectar a la base de datos
    $link = mysqli_connect($host, $user, $pass);

    // Verifica si la conexión fue exitosa
    if (!$link) {
        die("Error al conectar la BD: " . mysqli_connect_error());
    }

    // Selecciona la base de datos
    if (!mysqli_select_db($link, $db_name)) {
        die("Error al seleccionar la BD: " . mysqli_error($link));
    }

    return $link;
}
?>