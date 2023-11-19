<?php
    include("../modelo/conexionPDO.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $nombreproducto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $number = $_POST['precio'];

    $cero= '.00';
    $precio = $number.$cero;
    $nombre = $_FILES['foto']['name']; 
    $ruta_tmp = $_FILES['foto']['tmp_name'];

    $carpeta = "img/productos/";

    $ruta=$carpeta.$nombre;
    

    $mover = move_uploaded_file($ruta_tmp,$ruta);

    if($mover==true){
        $sql = $conexion->query("INSERT INTO productos VALUES ('$nombreproducto','$descripcion','$precio','$ruta')");

        if($sql==true){
            echo 'buen insertado';
            header("location:../vistas/proveedores/Agregarproductos.php");
        }
    }



?>