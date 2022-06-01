<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/asistencia.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Asistencia</title>

    <script src="https://kit.fontawesome.com/da23da97ae.js" crossorigin="anonymous"></script>
</head>
<body id="body">

<?php
require_once("/xampp/htdocs/Alertem/view/layout/nav.php");
    require_once("/xampp/htdocs/Alertem/view/layout/footer.php");
?>


<?php
    include_once "/xampp/htdocs/Alertem/conexion/conexio.php";
    $sentencia = $bd -> query("select * from alumnos");
    $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>


<div class="container_asistencia">
    <div class="container_img_asiste">
        <div class="subContainer_img_asiste">
            <h3>Grupo 7B</h3>
            <div class="datos_profe">
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
        </div>
    </div>


    <div class="container_table_asis">
        <table>
            <thead>
                <tr>
                    <th style="width:50%">Alumno</th>
                    <th>Fecha</th>
                    <th>Asistencia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            <?php 
                foreach($alumnos as $dato){ 
            ?>
                    <tr>
                        <td><?php echo $dato->alumno; ?></td>
                        <td><?php echo $dato->fecha; ?></td>
                        <td><?php echo $dato->asistencia; ?></td>
                        <td><button class="btn_tabla" ><a href="/view/editar.php?id_alumnos=<? echo $dato->id_alumnos; ?>"><i class="fa-solid fa-user-pen"></i>  Editar</a> 
                            </button> 
                            <button class="btn_tabla"><i class="fa-solid fa-trash-can"></i>
                            Eliminar</button> </td>
                    </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
