<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["alumno"]) || empty($_POST["fecha"]) || empty($_POST["asistencia"]) || empty($_POST["telefono"])){
        header('Location: http://index.php?mensaje=falta');
        exit();
    }

    include_once '/xampp/htdocs/Alertem/conexion/conexio.php';
    $alumno = $_POST["alumno"];
    $fecha = $_POST["fecha"];
    $asistencia = $_POST["asistencia"];
    $telefono = $_POST["telefono"];
    
    $sentencia = $bd->prepare("INSERT INTO alumnos(alumno,fecha,asistencia,telefono) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$alumno,$fecha,$asistencia,$telefono]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>