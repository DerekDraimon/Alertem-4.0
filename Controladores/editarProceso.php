<?php


    print_r($_POST);
    if(!isset($_POST['id_alumnos'])){
        header('Location: index.php$ruta?mensaje=error');
    }

    include_once '/xampp/htdocs/Alertem/conexion/conexio.php';
    $id_alumnos = $_POST['id_alumnos'];
    $alumno = $_POST['alumno'];
    $fecha = $_POST['fecha'];
    $asistencia = $_POST['asistencia'];
    $telefono = $_POST['telefono'];

    $sentencia = $bd->prepare("UPDATE alumnos SET alumno = ?, fecha = ?, asistencia = ?, telefono = ? where id_alumnos = ?;");
    $resultado = $sentencia->execute([$alumno, $fecha, $asistencia, $telefono, $id_alumnos]);

    if ($resultado === TRUE) {
        header('Location: $ruta?mensaje=editado');
    } else {
        header('Location: $ruta?mensaje=error');
        exit();
    }
    
?>