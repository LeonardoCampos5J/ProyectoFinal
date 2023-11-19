<?php 
    include("src/modelo/conexionPDO.php");
?>
<?php
    $corr = $_GET['nombre'];
    $sql = "SELECT NombreUsuario FROM usuarios WHERE CorreoUsuario = '$corr'"; 
    $stmt2 = $conexion->query($sql);
    $nombre = $stmt2->fetchColumn(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_comunidad.css">
    <link rel="stylesheet" href="css/fuente.css">
    <title>Comunidad CafeTux</title>
</head>
<body> 
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown; height: 60px;">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" style="margin: 10px;">
                            <center><a  href="inicio.php?nombre=<?php echo $corr ?>">Inicio</a></center>
                          </li>
                          <li class="nav-item" style="margin: 10px;">
                              <center><a  href="productos.php?nombre=<?php echo $corr ?>">Productos</a></center>
                          </li>
                          <li class="nav-item" style="margin: 10px;">
                              <center><a  href="blog.php?nombre=<?php echo $corr ?>">Blog</a></center>
                          </li>
                          
                        </ul>
                    </div>
                </div>
                <img src="img/logob.png" width="40px">
                <div>
                  <a href="src/controlador/cerrarSesion.php">
                      <input type="submit" class="btn btn-warning" value="Cerrar Sesion">
                  </a>
                  
              </div>
            </div>
        </nav>
    </header>

    
    <div class="mensajes">
        <div class="mensaje">
            <h1>Preguntas Frecuentes</h1>
            <br>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      ¿Cómo puedo hacer mis compras?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Ingresa a webhost000.cafetux.com <br>
                      Regístrate e inicia sesión para poder comprar. <br>
                      En el área de productos encuéntralo a través de nuestro menú. <br>
                      Una vez que encuentres el artículo de interés, selecciona. <br>
                      Agrega los artículos a tu carrito de compra dando clic en el botón de Agregar a Carrito. <br>
                      Una vez seleccionados los artículos de tu interés, haz clic en el botón de carrito que se encuentra en la parte superior derecha. <br>
                      Revisa tu pedido y confirma tu compra en el botón Ir al Carrito de Compras. <br>
                      Al finalizar tu pedido, tu registro aparecera en tus pedidos</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      ¿Qué son compras recurrentes?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Son compras que te permiten tener frecuencia de tiempo que más te convenga.

                      No olvides seleccionar la fecha de inicio del pedido y la frecuencia con la que se repetirá:
                      <br>
                      Todos los días. <br>
                      Una vez por semana. <br>
                      Cada 2 semanas. <br>
                      Cada 3 semanas. 
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      ¿Puedo guardar mi pedido y comprar más tarde?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Sí, siempre y cuando inicies sesión con tu misma cuenta.</div>
                  </div>
                </div>
              </div>
            
        </div>
        
    </div>
    <div class="detalles" style="height: 500px;">
        <div class="detalle">
            
            <a href="preguntasfrecuentes.php?nombre=<?php echo $corr ?>"><H1>Preguntas Frecuentes</H1></a>
        </div>

        
    </div>

    <div class="banner"></div>

    <footer class="footer"></footer>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>