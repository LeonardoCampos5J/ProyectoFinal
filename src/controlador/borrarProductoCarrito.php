<?php
    $nombre = $_GET['nombre'];
    $nombreProducto = $_GET['nombreProducto'];
    include ("../modelo/conexionPDO.php");

    $eliminar = "DELETE FROM carrito WHERE nombre='$nombreProducto'";
    $elimina = $conexion->query($eliminar);
    
    header("Location: vCarrito.php?nombre=$nombre");
    
    $conexion->close();
?>