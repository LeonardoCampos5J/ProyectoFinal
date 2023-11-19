<?php
    $nombre = $_GET['nombre'];
    include ("../modelo/conexionPDO.php");

    $eliminar = "DELETE FROM productos WHERE NombreProducto='$nombre'";
    $elimina = $conexion->query($eliminar);
    
    header("Location: ../vistas/administrador/administrador.php");
    
    
?>