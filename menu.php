<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png" type="imagen">
    <link rel="stylesheet" href="styles.css">
    <title>Wave</title>
    <style>
        html, body {
            height: 100%;
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            overflow: hidden; /* Evita barras de desplazamiento al ocultar el contenido fuera del área visible */
        }

        .portada {
            height: 100vh;
            background-image: url('img/portada.jpg'); /* Ajusta la ruta según la estructura de tu proyecto */
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px; /* Ajusta el relleno según sea necesario */
            background-color: #0E2148; /* Ajusta el color de fondo según sea necesario */
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->  
    <nav class="navbar navbar-expand-sm bg-custom navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/sinfond.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
                <span style="margin-left: 10px; color: white;">Wave</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="catalogo/moviles.php">Móviles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogo/hogar.php">Hogar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogo/negocios.php">Negocios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../carrito.php"> 
             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Portada  -->
    <div class="portada">
        <div class="titulo">
            <h1>Wave</h1>
            <h2>Conectando mundos, acercando personas.</h2>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-custom fixed-bottom">
        <a href="https://www.facebook.com/tuUsuario" target="_blank"><img src="img/Facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/tuUsuario" target="_blank"><img src="img/Instagram.png" alt="Instagram"></a>
        <a href="https://wa.me/tuNumeroWhatsApp" target="_blank"><img src="img/WhatsApp.png" alt="WhatsApp"></a>
    </footer>
</body>
</html>
