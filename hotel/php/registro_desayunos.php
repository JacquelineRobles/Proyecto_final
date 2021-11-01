<?php

//llamamos al archivo de conección de la BD
    include 'conexion_be.php';
    $fecha = date('Y-m-d', strtotime($_POST['fecha']));
    $hora = $_POST['hora'];
    $cantidad = $_POST['cantidad'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];
    

    //insertamos en la BD
    $query = "INSERT INTO desayunos (fecha, hora, cantidad, nombre, correo,comentarios)
             VALUES ('$fecha', '$hora', '$cantidad', '$nombre', '$correo', '$comentario')";



//ejecutar mensaje
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert ("Reservación realizada con éxito");
        window.location = "../form_reservas_desayunos.html"
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert ("Inténtelo de nuevo, datos no almacenado");
        window.location = "../form_reservas_desayunos.html"
        </script>
        ';
    }

    mysqli_close($conexion);

?>