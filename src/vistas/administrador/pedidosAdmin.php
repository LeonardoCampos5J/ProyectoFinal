<?php 
    include("../../modelo/conexionPDO.php");
?>
<?php

    $sql2 = "SELECT * FROM compras";
    $stmt3 = $conexion->query($sql2);
    $datos = $stmt3->fetchAll(PDO::FETCH_OBJ);

    // Organizar los datos por fecha
    $productosPorFecha = [];
    foreach ($datos as $fila) {
        $fechaPedido = $fila->fechaPedido;
        $productosPorFecha[$fechaPedido][] = $fila;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/pedidos.css">
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
                                <center><a  href="administrador.php">Registro de Usuarios</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="../../../catalogoAdmin.php">Catalogo de Productos</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="eliminarAdmin.php">Eliminar Proveedores</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="pedidosAdmin.php">Pedidos de Clientes</a></center>
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

    <div class="principal">
        <div class="titulo-principal">
            <h3>Pedidos <?php echo $nombre; ?> </h3>
        </div>
        <div class="cuerpo-principal">
            <h4>Pedidos</h4>
            <!-- Iterar sobre las fechas y mostrar un contenedor para cada fecha -->
            <?php foreach ($productosPorFecha as $fechaPedido => $productos) : ?>
                <div class="contenedor-fecha">
                    <h5>Productos Comprados el <?php echo $fechaPedido; ?></h5>
                    <!-- Iterar sobre los productos y mostrarlos en el contenedor -->
                    <?php foreach ($productos as $producto) : ?>
                        <div class="card mb-1" style="max-width: auto; margin:30px">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="../../../<?php echo $producto->imgProducto;  ?>" class="img-fluid rounded-start" width="250px">
                                </div>
                                <div class="col-md-9" style="display:flex; ">
                                    <div class="card-body">
                                        <h5 class="card-title">Usuario: <?php echo $producto->usuario; ?>  </h5>
                                        <p class="card-text"> Producto: <?php echo $producto->nombreProducto; ?>  </p>
                                        <p class="card-text"> <?php echo $producto->precioProducto; ?> </p>
                                        <p class="card-text"><small class="text-muted"> <?php echo $producto->fechaPedido; ?> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>

    <!-- ... Tu código para los scripts y estilos ... -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
