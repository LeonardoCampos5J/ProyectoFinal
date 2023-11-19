<?php
    include('../modelo/conexionPDO.php');

    if(!empty($_POST['correo'])&&!empty($_POST['contrasena'])&&!empty($_POST['nombre'])&&!empty($_POST['apellido'])&&!empty($_POST['direccion'])&&!empty($_POST['telefono'])){

        $correo = $_POST['correo']; 
        $contra = $_POST['contrasena'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $id_cargo = '2';
        

        $sql = "INSERT INTO usuarios( NombreUsuario, ApellidoUsuario, CorreoUsuario, contrasena, direccion, telefono, id_cargo) VALUES (:nombre,:apellido,:correo,:contra,:direc,:tel,:id)";
        $stmt = $conexion->prepare($sql);
        $stmt -> bindParam(":nombre",$nombre);
        $stmt -> bindParam(":apellido",$apellido);
        $stmt -> bindParam(":correo",$correo);
        $stmt -> bindParam(":contra",$contra);
        $stmt -> bindParam(":direc",$direccion);
        $stmt -> bindParam(":tel",$telefono);
        $stmt -> bindParam(":id",$id_cargo);
        

        if($stmt -> execute()){
            header("Location: ../../index.html");
        } else print("Error al registrar Datos");
        

    } else print ("Todos los campos deben de estar llenos");


?>