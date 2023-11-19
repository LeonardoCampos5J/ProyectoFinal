<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../../css/_registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown;">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 50%;">
                    <img src="../../img/logob.png" width="40px">
                    <div style="padding-left: 40%;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float: right;">
                            <li class="nav-item" style="margin: 10px;">
                                <a type="button" class="btn btn-outline-secondary" href="../vistas/iniciosesion.php">Iniciar Sesion</a>
                            </li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
        </nav>
    </header> 
 
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><a href="../../index.html" id="regresa"><button type="button" class="btn-close" aria-label="Close"></button></a></center> 
                <img src="../../img/logob.png" width="10%"><p>Registro de Usuario</p>
            </div>
            <div class="card-body">
                <form action="../controlador/validaRegistro.php" method="POST" >
                    <div class="form-floating mb-3">
                        <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Correo Electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ\s]+" title="Solo se permiten letras y espacios" minlength="3">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="name@example.com" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ\s]+" title="Solo se permiten letras y espacios" minlength="3">
                        <label for="floatingInput">Apellido</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="name@example.com" required minlength="6">
                        <label for="floatingInput">Dirección</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="telefono" class="form-control" id="floatingInput" placeholder="name@example.com" required  minlength="10">
                        <label for="floatingInput">Teléfono</label>
                    </div>
                    <br>
                    <div class="col-12">
                        <button type="submit" class="card-header">Registrarse</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>