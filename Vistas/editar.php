<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/crear.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Editar</title>

    <script src="https://kit.fontawesome.com/da23da97ae.js" crossorigin="anonymous"></script>
</head>
<body id="body">
<?php
    require_once("/xampp/htdocs/Alertem/view/layout/nav.php");
    ?>

<?php
    if(!isset($_GET['id_alumnos'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '/xampp/htdocs/Alertem/conexion/conexio.php';
    $id_alumnos = $_GET['id_alumnos'];

    $sentencia = $bd->prepare("select * from alumnos where id_alumnos = ?;");
    $sentencia->execute([$id_alumnos]);
    $alumnos = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container_crear">
    <div class="card-header"> 
        <h4>Editar estudiante</h4>
    </div>
    <div class="container_tabla_edit"> 
        <form action="/controlador/editarProceso.php" method="POST" >
            <div class="form-group">
                <label for="alumno">Alumno</label><br>
                <input type="text" class="form-control"  name="alumno" required value="<?php echo $alumnos->alumno ?>">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label><br>
                <input type="date" class="form-control"  name="fecha" required value="<?php echo $alumnos->fecha; ?>">
            </div>
            <div class="form-group">
                <label for="asistencia">Asistencia</label><br>
                <input type="text" class="form-control"  name="asistencia" required value="<?php echo $alumnos->asistencia; ?>">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label><br>
                <input type="text" class="form-control"  name="telefono" required value="<?php echo $alumnos->telefono; ?>">
            </div>

            <div class="container_btn">
                <div class="sub_btn">
                    <input type="hidden" name="id_alumnos" value="<?php echo $alumnos->id_alumnos; ?>">
                    <input  type="submit" class="btn_btn" value="Editar usuario" >
                </div>
                <div class="sub_btn">
                    <button class="btn_vovler"><a href="/view/asistencia.php"> Volver inicio</a></button>
                </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>