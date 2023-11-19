<?php
    include("../modelo/conexionPDO.php");

    $total = $_GET['total'];

    $correo = $_POST['correo'];
    $fecha = date('Y-m-d');
    $estado = $_POST['estado'];
    $calle = $_POST['calle'];
    $entre = $_POST['entre'];
    $numeroExterior = $_POST['exterior'];
    $postal = $_POST['codigo'];

    // Consulta para seleccionar los productos del carrito del usuario
    $consultaCarrito = $conexion->query("SELECT * FROM carrito WHERE usuario = '$correo'");
    $resultadosCarrito = $consultaCarrito->fetchAll(PDO::FETCH_ASSOC);

    // Iterar sobre los resultados y realizar la inserción en la tabla de compras
    foreach ($resultadosCarrito as $producto) {
        $nombreProducto = $producto['nombre'];
        $precio = $producto['precio'];
        $ruta = $producto['img'];

        // Inserción en la tabla de compras
        $sql = $conexion->query("INSERT INTO compras VALUES ('$correo','$nombreProducto', '$precio','$ruta','$total','$fecha', '$estado','$calle', '$entre', '$numeroExterior', '$postal')");
        
    }

    // Eliminar productos del carrito después de la compra
    $sql2 = $conexion->query("DELETE FROM carrito WHERE usuario = '$correo'");
    header("location:../../inicio.php?nombre=$correo");
    
    
?>
