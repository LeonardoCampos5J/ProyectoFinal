<?php
    include("src/modelo/conexionPDO.php");
?>
<?php
    $correo = $_GET['nombre'];

    $sql = "SELECT NombreUsuario FROM usuarios WHERE CorreoUsuario = '$correo'";
    $stmt2 = $conexion->query($sql);
    $nombre = $stmt2->fetchColumn(0);

    $query = "SELECT * FROM productos WHERE usuario = '$correo'";
    $stmt = $conexion->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaféTux Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/producto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="src/vistas/proveedores/Agregarproductos.php?nombre=<?php echo $correo; ?>">Registro de Productos</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="catalogo.php?nombre=<?php echo $correo; ?>">Catalogo de Productos</a></center>
                            </li>
                            
                        </ul> 
                    </div>
                    
                </div>
                
                <img src="img/logob.png" width="40px">
                <div>
                    <a href="src/controlador/cerrarSesion.php">
                        <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                    </a>
                    
                </div>
            </div>
        </nav>
    </header>

    <div class="producto">
        <center><h1 class="titulo">Catàlogo CaféTux</h1></center>
        <center><i>PRODUCTOS<hr> </i></center> 
        <br><br>
        <div class="contenedor-items">
            <?php foreach($registros as $fila) : ?>
                <center>
                    <div class="item" style="border: 1px solid black; width: 40%">
                        <img src=" <?php echo $fila->ruta; ?> " width="60%" class="img-item"><br><br>
                        <span class="titulo-item"> <?php echo $fila->NombreProducto; ?> </span><br><br>
                        <span class="precio-item"> $<?php echo $fila->Precio; ?> </span><br>
                        <a href="src/controlador/borrarProveedor.php?nombre=<?php echo $fila->NombreProducto; ?>&correo=<?php echo $correo; ?>" class="btn btn-danger" style="margin:10px">Borrar Producto</a>
                    </div> <br>
                </center>
                
            <?php endforeach; ?>
            

        </div>
        
        
    </div>

    <footer class="footer"></footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>