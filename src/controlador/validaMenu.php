<?php

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    session_start();
    $_SESSION['correo'] = $correo;

    $conexion =mysqli_connect("localhost","root","root","cafetux");

    $consulta = "SELECT * FROM usuarios WHERE CorreoUsuario= '$correo' AND contrasena ='$contrasena'";
    $resultado =mysqli_query($conexion,$consulta);

    $filas=mysqli_fetch_array($resultado);

    if($filas['id_cargo']==1){
        header("location:../vistas/administrador/administrador.php");
    }
    if($filas['id_cargo']==2){
        header("location:../../inicio.php?nombre=$correo");
    }
    if($filas['id_cargo']==3){
        header("location:../vistas/proveedores/Agregarproductos.php?nombre=$correo");
    }
    

    
?>