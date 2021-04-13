<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Usuario: Secretaria</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">

    <div class="row">
        
        <div class="wrapper fadeInDown col-sm-4"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="generar.php">
                        <img class="conimagen" id="conimg"src="../imagenes/generar.png" id="icon" alt="User Icon" style="max-width:60%;width:auto;height:auto;"/>
                    </a>
                    <h1>Generar envio</h1>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown col-sm-4"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="choferes.php">
                        <img class="img-fluid" src="../imagenes/chofer.jpg" id="icon" alt="User Icon" style="max-width:50%;width:auto;height:auto;">    
                    </a>
                    <h1>Pilotos</h1>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown col-sm-4"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="Rutas.php">
                    <img class="img-fluid" src="../imagenes/rutas.jpg" id="icon" alt="User Icon" style="max-width:60%;width:auto;height:auto;">
                    </a>
                    <h1>Rutas</h1>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown col-sm-4"><!--efecto de caida-->
            <div id="formContent"><!--contenedor-->
                <div class="fadeIn first">
                    <a href="estados.php">
                    <img class="img-fluid" src="../imagenes/estados.jpg" id="icon" alt="User Icon" style="max-width:50%;width:auto;height:auto;">
                    </a>
                    <h1>Estado Envios</h1>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>