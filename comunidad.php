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
    <link rel="stylesheet" href="css/_comunidad.css">
    <link rel="stylesheet" href="css/fuente.css">
    <title>Comunidad CafeTux</title>
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
            <a href="comunidad.html"><h1>Ubicación y Detalles</h1></a>
            <br>
            <hr>
            <p>Su opinión y sus dudas son muy importantes para nosotros, utilice cualquiera de nuestras opciones de contacto en breve nos comunicaremos con usted</p>
            <b>correo: </b><p>cafetux@gmail.com</p>
            <b>Facebook: </b><p>cafetux_Oficial</p>
            <b>Instagram: </b><p>Cafetux_Oficial</p>
            <b>telefono: </b><p>9611234567</p>
            
        </div>

        
    </div>
    <div class="mensajes">
        <form action="inicio.php?nombre=<?php echo $corr; ?>" method="POST">
            <div class="mensaje">
                <h1>Envíanos un Mensaje</h1>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">¿Cual es tu satisfaccion de la pagina?</label><br>
                    <select name="" id="" class="form-control">
                        <option value="">Selecciona...</option>
                        <option value="">Mala</option>
                        <option value="">Ni buena Ni mala</option>
                        <option value="">Regular</option>
                        <option value="">Buena</option>
                        <option value="">Muy Buena</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Mensaje</label>
                    <input type="text" name="mensaje" class="form-control" id="formGroupExampleInput4" placeholder="Escribe tu mesnaje aquí">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Enviar" class="btn btn-secondary">
                </div>
            </div>
        </form>
        
        
    </div>
    

    <div class="banner"></div>

    <footer class="footer"></footer>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>