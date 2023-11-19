<?php
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    include ("../modelo/conexionPDO.php");

    $eliminar = "DELETE FROM productos WHERE NombreProducto='$nombre'";
    $elimina = $conexion->query($eliminar);
    
    header("Location: ../vistas/proveedores/Agregarproductos.php?nombre=$correo");
    
    
?>