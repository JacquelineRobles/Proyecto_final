<?php

session_start();

//llamamos al archivo de conección de la BD
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

//Validar datos
$validar_login =mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo;
        header("location: ../main_admin.php");
        exit;
    }
    else{
        echo '
        <script>
        alert ("Usuario no existe, verifique los datos introducidos");
        window.location = "../login.html";
        </script>
        ';
        exit;
    }


?>