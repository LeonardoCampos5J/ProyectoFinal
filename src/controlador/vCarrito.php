<?php
    include("../modelo/conexionPDO.php");

    $correo = $_GET['nombre'];

    // Utiliza una consulta preparada para evitar inyecciones SQL
    $consulta = $conexion->query("SELECT usuario FROM carrito WHERE usuario = '$correo'");
    
    
    // Obtiene la cantidad de filas afectadas por la consulta
    $numFilas = $consulta->rowCount();

    if ($numFilas == 0) {
        header("location: ../../carritoVacio.php?nombre=$correo");
        exit();
    } else {
        // Hay productos en el carrito
        header("location: ../../carrito.php?nombre=$correo");
        exit();
    }
?>
