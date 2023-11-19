<?php
    include("../modelo/conexionPDO.php");

    $usuario = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen']; 

    $sql = $conexion->query("INSERT INTO carrito VALUES('$usuario','$nombre','$precio','$imagen')");

    if($sql==true){
        header("location:../../productos.php?nombre=$usuario");
    }
    

?>