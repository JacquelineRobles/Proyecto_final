<?php

//llamamos al archivo de conección de la BD
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    //insertamos en la BD
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasenia)
             VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasenia')";


//verificar que el correo no se repita en la BD
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo='$correo'");
    
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
        <script>
        alert("Este correo ya está registrado, intenta nuevamente");
        window.location = "../login.html"
        </script>
        ';
        exit();
    }


//Verificar que el nombre de usuario no se repita en la base de datos

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  usuario='$usuario'");
    
if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("Este usuario ya está registrado, intenta con uno nuevo");
    window.location = "../login.html"
    </script>
    ';
    exit();
}

//ejecutar mensaje
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert ("Usuario almacenado exitosamente");
        window.location = "../login.html"
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert ("Inténtelo de nuevo, usuario no almacenado");
        window.location = "../login.html"
        </script>
        ';
    }

    mysqli_close($conexion);

?>