<?php 
    include("src/modelo/conexionPDO.php");
?>
<?php
    
    $query = "SELECT * FROM productos";
    $stmt = $conexion->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);

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
    <title>CaféTux Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicio2.css">
    <link rel="stylesheet" href="css/fuente.css">
    
</head>
<body> 
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown;height: 60px;">
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
                    <div style="width:20%; ">
                        <img src="img/logob.png" width="30%">
                    </div>
                    <div style=" min-width:20%;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item" style="margin: 10px; background-color: #8B5737;">
                                <center><a style="padding:0px 10px 0px 10px"  href="pedidos.php?nombre=<?php echo $corr ?>">Hola! <?php echo $nombre; ?></a></center>
                            </li>
                        </ul>
                    </div>
                    <a href="src/controlador/vCarrito.php?nombre=<?php echo $corr ?>">
                        <img src="img/cart-shopping-solid.svg" width="20px" style="margin:20px;">
                    </a>
                    <div style=" margin: 0px 70px 0px 0px;">
                        <a href="src/controlador/cerrarSesion.php">
                            <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                        </a>
                        
                    </div>
                </div>
                
            </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/c2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/c2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/c2.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="contenedor">
        <did class="contenedor-title">
            <h1>Ofertas</h1>
        </did>
        <div class="contenedor-body">
            <?php foreach($registros as $fila) : ?>
                <div class="card">
                    <img src=" <?php echo $fila->ruta; ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> <?php echo $fila->NombreProducto; ?> </h5>
                    <p class="card-text"> <?php echo $fila->Descripcion; ?> </p>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
        
    </div>

    <div class="imagenes">
        <div class="img1">
            <img src="img/tuxcafe3.png" >
        </div>
        <div class="img2">
            <img src="img/tuxcafe2.png" alt="">
        </div>
        <div class="img4">
            <img src="img/tuxcafe1.png" alt="">
        </div>
        <div class="img3">
            <img src="img/banner3.png" alt="">
        </div>
    </div>

    

    <div class="publicidad">
        <img src="img/promo4.jpeg" alt="">
        <img src="img/promo3.jpeg" alt="">
        <img src="img/promo2.jpeg" alt="">
        <img src="img/promo4.jpeg" alt="">
    </div>
    <div class="banner">
        <div class="baner">
            <a href="" class="idea">
                <div class="circulo">
                    <center><img src="img/caravan-solid.svg" width="40px"></center>
                </div>
                <p>Envios Gratis desde <br>$500</p>
            </a>
            <a href="" class="idea">
                <div class="circulo">
                    <img src="img/newspaper-regular.svg" width="40px">
                </div>
                <p>Noticias de Cafe</p>
            </a>
            <a href="" class="idea">
                <div class="circulo">
                    <img src="img/tty-solid.svg" width="40px">
                </div>
                <p>Comunicate con <br>Nosotros</p>
            </a>
            <a href="" class="idea">
                <div class="circulo">
                    <img src="img/circle-question-regular.svg" width="40px">
                </div>
                <p>Ayuda  <br>24 hrs</p>
            </a>
            
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>