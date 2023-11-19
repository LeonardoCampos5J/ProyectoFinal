<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador CaféTux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/producto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    
    <link rel="stylesheet" href="../../../css/fuente.css">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown;height: 60px;">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="administrador.php">Registro de Usuarios</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="../../../catalogoAdmin.php">Catalogo de Productos</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="eliminarAdmin.php">Eliminar Proveedores</a></center>
                            </li>
                            <li class="nav-item" style="margin: 10px;">
                                <center><a  href="pedidosAdmin.php">Pedidos de Clientes</a></center>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="../../../img/logob.png" width="40px">
                <div>
                    <a href="../../controlador/cerrarSesion.php">
                        <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                    </a>
                    
                </div>
            </div>
        </nav>
    </header>

    <div class="producto">
        <center><h1 class="titulo">Administrador CaféTux</h1></center>
        <center><i>Agregar Usuarios<hr> </i></center> 
        <br><br>
        <form action="src/controlador/vRegistroAdmin.php" method="POST" >
            <div class="form-floating mb-3">
                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Correo Electrónico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Nombre(Empresa o Cliente)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Dirección</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="telefono" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <select type="number" name="cargo" class="form-control">
                    <option value="0"></option>
                    <option value="1">Administrador</option>
                    <option value="2">Cliente</option>
                    <option value="3">Proveedor</option>
                </select>
            </div>

            <br>
            <div class="col-12">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>
        
        
    </div>

    <footer class="footer"></footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>