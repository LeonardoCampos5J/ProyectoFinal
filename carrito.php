<?php 
    include("src/modelo/conexionPDO.php");
?>

<?php 
    $corr = $_GET['nombre'];
    $sql = "SELECT NombreUsuario FROM usuarios WHERE CorreoUsuario = '$corr'"; 
    $stmt2 = $conexion->query($sql);
    $nombre = $stmt2->fetchColumn(0);
?>

<?php
    $sql2 = "SELECT * FROM carrito WHERE usuario = '$corr'";
    $stmt3 = $conexion->query($sql2);
    $datos = $stmt3->fetchAll(PDO::FETCH_OBJ);

    // Calcular el total sumando los valores de la columna 'tu_columna_numerica'
    $total = 0;
    $envio= 150;
    foreach ($datos as $item) {
        $total += $item->precio; // Reemplaza 'tu_columna_numerica' con el nombre real de la columna
    }

    // Mostrar el total
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carrito.css">
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
                    
                    <div style=" margin: 0px 70px 0px 0px;">
                        <a href="src/controlador/cerrarSesion.php">
                            <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                        </a>
                        
                    </div>
                </div>
                
            </div>
        </nav>
    </header>

    <div class="principal">
        <div class="titulo-principal">
            <h3>Tu carrito <?php echo $nombre; ?> </h3>
        </div>
        <div class="cuerpo-principal">
            <h4>Tus Productos Seleccionados</h4>
            <?php foreach($datos as $fila) : ?>
                <div class="card mb-1" style="max-width: auto; margin:30px">
                    <div class="row g-0">
                        <div class="col-md-1">
                            <img src="<?php echo $fila->img;  ?>" class="img-fluid rounded-start" class="img-carrito">
                        </div>
                        <div class="col-md-11" style="display:flex; ">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $fila->nombre;  ?> </h5>
                                <p class="card-text"><small class="text-muted"><?php echo $fila->precio;  ?></small></p>
                            </div>
                            <div style="float:right; margin:30px;">
                                <a href="src/controlador/borrarProductoCarrito.php?nombreProducto=<?php echo $fila->nombre;?>&nombre=<?php echo $corr;?>"><img src="img/trash-solid.svg" width="20px"></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            
            
            <hr>
            <h4>Informacion del Envio</h4>
            <div class="informacion-general">
                <div class="informacion">
                    <form action="src/controlador/validarCompra.php?total=<?php echo $total; ?>" method="POST">

                        <input name="correo" type="hidden" value="<?php echo $corr; ?>">
                        <input name="nombreProducto" type="hidden" value="<?php echo $fila->nombre; ?>">
                        <input name="precio" type="hidden" value="<?php echo $fila->precio; ?>">

                        <div class="form-floating mb-1" style="max-width:600px;">
                            <input type="text" name="estado" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Estado</label>
                        </div>
                        <div class="form-floating mb-1" style="max-width:600px;">
                            <input type="text" name="calle" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Calle o Avenida principal</label>
                        </div>
                        <div class="form-floating mb-1" style="max-width:600px;">
                            <input type="text" name="entre" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Entre Calles o Avenidas</label>
                        </div>
                        <div class="form-floating mb-1" style="max-width:600px;">
                            <input type="number" name="exterior" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Numero exterior de Casa</label>
                        </div>
                        <div class="form-floating mb-3" style="max-width:600px;">
                            <input type="number" name="codigo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Codigo Postal</label>
                        </div>
                        <div class="form-floating mb-1" style="max-width:600px;">
                            <input type="Submit" value="Confirmar Comprar" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <div class="total-pedido">
                    
                    <div class="form-floating mb-1" style="max-width:600px;">
                        <input type="Calle" class="form-control" id="floatingInput" value="<?php echo $total; ?>" readonly>
                        <label for="floatingInput">Pre-Total</label>
                    </div>
                    <div class="form-floating mb-1" style="max-width:600px;">
                        <input type="Calle" class="form-control" id="floatingInput" value="150" readonly>
                        <label for="floatingInput">Envio</label>
                    </div>
                    <hr>
                    <div class="form-floating mb-1" style="max-width:600px;">
                        <input type="Calle" class="form-control" id="floatingInput" value="<?php echo $envio+$total; ?>" readonly>
                        <label for="floatingInput">Total</label>
                    </div>
                </div>
            </div>
            

            
        </div>
    </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>