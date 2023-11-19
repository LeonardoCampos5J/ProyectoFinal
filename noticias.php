<?php 
    include("src/modelo/conexionPDO.php");
?>
<?php
    $corr = $_GET['nombre'];
    $sql = "SELECT NombreUsuario FROM usuarios WHERE CorreoUsuario = '$corr'"; 
    $stmt2 = $conexion->query($sql);
    $nombre = $stmt2->fetchColumn(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/noti.css">
    <link rel="stylesheet" href="css/fuente.css">
    <title>Noticias CafeTux</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown; height: 60px;">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: brown;height: 50px;">
                    <div style=" width:90%;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="inicio.php?nombre=<?php echo $corr ?>">Inicio</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="productos.php?nombre=<?php echo $corr ?>">Productos</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="blog.php?nombre=<?php echo $corr ?>">Blog</a></center>
                            </li>
                            
                        </ul>
                    </div>
                    <div style=" width:70%;">
                        <img src="img/logob.png" width="10%">
                    </div>
                    <div style=" margin: 0px 70px 0px 0px;">
                        <a href="src/controlador/cerrarSesion.php">
                            <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>

     
    
    <div class="detalles">
        <div class="detalle">
            <center>
                <div class="noticias">
                    <center><h3>NOTICIAS</h3></center>
                </div>
            </center>
            <br><br>
            <hr>
            <center>
             <img src="img/noticia1.png" alt=""><H3>Expo Cafe CDMX 2023</H3>
             <br><br>
             <img src="img/noticia2.png" alt="">
             <br><br>
             <img src="img/noticia3.png" alt="">
             <br><br>
             <img src="img/noticia4.png" alt="">
            </center>
            
            <br>
            <div class="informacion">
            <div class="comunidad">
                    <center><a href="comunidad.php?nombre=<?php echo $corr ?>"><H1>COMUNIDAD</H1><hr>mensajes de nuestros clientes</a></center>
                </div>
                <div class="preguntas">
                    <center><a href="preguntasfrecuentes.php?nombre=<?php echo $corr ?>"><H1>PREGUNTAS</H1><hr>preguntas frecuentes</a></center>
                </div>
                <div class="ayuda">
                    <center><a href="noticias.php?nombre=<?php echo $corr ?>"><H1>NOTICIAS</H1><hr>¿quienes son nuestros proveedores?</a></center>
                </div>
            </div>
            <br><br>
            
        </div>
        
        
    </div>
    



    <div class="footer"></div>
    





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>