<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/nav.css">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/da23da97ae.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="icon_menu">
        <i id="btn_open" class="fa-solid fa-align-left"></i>
        </div>
        
        <nav>
            <div class="navbar">
                <b><a href="#">Soporte</a></b>
                <img src="/Imagenes/Recurso 2.ico" alt="imag_R" width="35">
                    <div class="dropdown">
                        <div  class="dropbtn">
                        <img onclick="myFunction()"  class="img_nav_desple" src="/Imagenes/cuenta-verde.png" alt="datos_usuario" width="35">
                        <img src="/Imagenes/desplegable.png" alt="datos_usuario" width="35">
                        </div>
                            <div id="myDropdown" class="dropdown-content">
                                <b><a href="#">Cuenta<i class="fa-solid fa-address-book"></i></a>
                                <a href="#">Actualizar datos<i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="a_salir">Salir<i class="fa-solid fa-arrow-right-from-bracket"></i></a></b>
                            </div>
                    </div>
            </div>
        </nav>

    </header>

    <div id="menu_side" class="menu__side">
        <div class="name__page">
            <a href="/index.php"><img src="/Imagenes/Recurso 2.ico" alt="R" width="30"></a>
            <img src="/Imagenes/Recurso 5.png" alt="aelrtem" width="150">
        </div>

        <div class="options__menu">

            <a href="#">
                <div class="option">
                    <img src="/Imagenes/califi-blanca.png" alt="" width="30" title="Calificaciones" width="30">
                    <h4>Calificaciones</h4>
                </div>
            </a>

            <a href="/view/asistencia.php">
                <div class="option">
                    <img src="/Imagenes/asisten-blanca.png" alt="" width="30" title="Asistencias" width="30">
                    <h4>Asistencias</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="/Imagenes/matricula-blanca.png" alt="" width="30" title="Matricula" width="30">
                    <h4>Matricula</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="/Imagenes/calendario-blanco.png" alt="" width="30" title="Calendario" width="30">
                    <h4>Calendario</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="/Imagenes/horario_blanco.png" alt="" width="30" title="Horario" width="30">
                    <h4>Horario</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="/Imagenes/horario_blanco.png" alt="" width="30" title="Horario" width="30">
                    <h4>Grupos</h4>
                </div>
            </a>
        </div>
    </div>

    <script src="/js/nav.js"></script>
</body>
</html>
    