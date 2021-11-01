<?php

//llamamos al archivo de conección de la BD
    include 'conexion_be.php';
    $fecha = date('Y-m-d', strtotime($_POST['fecha']));
    $fecha2 = date('Y-m-d', strtotime($_POST['fecha2']));
    $adultos = $_POST['adultos'];
    $ninos = $_POST['ninos'];
    $tipo_hab = $_POST['habs'];
    $cantidad = $_POST['cantidad'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];
    

    //insertamos en la BD
    $query = "INSERT INTO habitaciones (ingreso, salida, adultos, ninos, tipo_hab, cantidad, nombre, telefono, correo,comentarios)
             VALUES ('$fecha', '$fecha2', '$adultos', '$ninos', '$tipo_hab', '$cantidad', '$nombre', '$tel', '$correo', '$comentario')";



//ejecutar mensaje
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert ("Reservación realizada con éxito");
        window.location = "../form_reservas_hab.html"
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert ("Inténtelo de nuevo, datos no almacenado");
        window.location = "../form_reservas_hab.html"
        </script>
        ';
    }

    mysqli_close($conexion);

?>