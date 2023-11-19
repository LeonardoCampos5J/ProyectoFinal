<?php
    $nombre = $_GET['nombre'];
    include ("../modelo/conexionPDO.php");

    $eliminar = "DELETE FROM usuarios WHERE NombreUsuario='$nombre'";
    $elimina = $conexion->query($eliminar);
    echo "hola mundo";
    header("Location: ../vistas/administrador/administrador.php");
    
    $conexion->close();
?>