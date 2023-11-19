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
    <title>CaféTux Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/producto.css"> 
    <script src="js/app.js" async></script>
    
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

    <div class="producto">
        <center><h2 class="titulo">PRODUCTOS CaféTux</h2></center>
        <center><i>el café recomendados para tus mañanas </i></center> <br>
        <center> <hr></center>
        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items"> 
                <?php foreach($registros as $fila) : ?>
                    <form action="src/controlador/guardarCarrito.php" method="POST" class="item">
                        <!-- inputs -->
                        <input name="correo" type="hidden" value="<?php echo $corr; ?>">
                        <input name="nombre" type="hidden" value="<?php echo $fila->NombreProducto;  ?>">
                        <input name="precio" type="hidden" value="<?php echo $fila->Precio; ?>">
                        <input name="imagen" type="hidden" value="<?php echo $fila->ruta; ?>" >
                        <!-- tarjeta vista cliente -->
                        <span class="titulo-item"> <?php echo $fila->NombreProducto; ?> </span>
                        <img src=" <?php echo $fila->ruta; ?> " width="100%" class="img-item">
                        <span class="precio-item"> $ <?php echo $fila->Precio; ?> </span>
                        <button class="boton-item" >Agregar al Carrito</button>
                    </form>

                <?php endforeach; ?>
                
               
            </div>
            
        </section>
    </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>