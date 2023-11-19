<?php
    include("../../modelo/conexionPDO.php");
    $correo = $_GET['nombre'];

    $sql = "SELECT NombreUsuario FROM usuarios WHERE CorreoUsuario = '$correo'";
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
    <link rel="stylesheet" href="../../../css/producto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    
    <link rel="stylesheet" href="../../../css/fuente.css">
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
                                <center><a  href="Agregarproductos.php?nombre=<?php echo $correo; ?>">Registro de Productos</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="../../../catalogo.php?nombre=<?php echo $correo; ?>">Catelogo de Productos</a></center>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <img src="../../../img/logob.png" width="40px">
                <div>
                    <a href="../../controlador/cerrarSesion.php">
                        <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                    </a>
                    
                </div>
            </div>
        </nav>
    </header> 

    <div class="producto">
        <center><h1 class="titulo">CaféTux</h1></center>
        <center><h3>Agregar PRODUCTOS <?php echo $nombre; ?><hr> </h3></center> 
        <br><br>
        <form action="../../../vImg.php?nombre=<?php echo $correo; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ\s]+" title="Solo se permiten letras y espacios" minlength="3" >
                <label for="floatingInput">Nombre Producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="descripcion" class="form-control" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ\s]+" title="Solo se permiten letras y espacios" minlength="10" >
                <label for="floatingInput">Descripcion del Producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="precio" class="form-control" required pattern="[0-9]+" title="Solo se permiten numeros" minlength="3">
                <label for="floatingInput">Precio del Producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="foto" accept="image/*" required>
                
            </div>

            <div class="form-floating mb-3">
                <input type="submit" class="btn btn-success" Value="Registrar Producto">
            </div>
        </form>
        
        
    </div>

    <footer class="footer"></footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>