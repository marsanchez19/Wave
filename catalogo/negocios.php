<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['plan_id'], $_POST['plan_nombre'], $_POST['plan_precio'], $_POST['cantidad'])) {
    $plan = array(
        "id_plan" => $_POST['plan_id'],
        "nombre_plan" => $_POST['plan_nombre'],
        "precio_plan" => $_POST['plan_precio'],
        "cantidad" => $_POST['cantidad']
    );

    $_SESSION['carrito'][] = $plan;
}


$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="icon" href="../img/logo.png" type="imagen">
    <link rel="stylesheet" href="../styles.css">
    <title>Wave</title></head>
</head>
<body>
    <!-- Barra de navegación -->  
 <nav class="navbar navbar-expand-sm bg-custom navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
            <span style="margin-left: 10px; color: white;">Wave</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../menu.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="moviles.php">Móviles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hogar.php">Hogar</a>
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

  <div class="container mt-5">
    <h1 class="mb-4">Negocios</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                
        <form action="" method="POST">
                <div class="card-body">
                    <h2 class="card-title">Plan Básico</h2>
                    <p class="card-text">500 MB</p>
                    <p class="card-text">Telefonía</p>
                    <p class="card-text">1 Wifi 360</p>
                    <p class="card-text"></p>
                    <p class="card-text">$49.990</p>
                    <input type="hidden" name="plan_id" value="10">
                <input type="hidden" name="plan_nombre" value="Plan Básico (Negocio)">
                <input type="hidden" name="plan_precio" value="49990">
                <input type="number" required class="form-control mb-2" name="cantidad" placeholder="Cantidad" min="1">
                <button type="submit" class="btn btn-primary">Comprar</button>
                </div>
                
        </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                
        <form action="" method="POST">
                <div class="card-body">
                    <h2 class="card-title">Plan Intermedio</h2>
                    <p class="card-text">700 MB</p>
                    <p class="card-text">Telefonía</p>
                    <p class="card-text">2 Wifi 360</p>
                    <p class="card-text">$69.990</p>
                    <input type="hidden" name="plan_id" value="11">
                <input type="hidden" name="plan_nombre" value="Plan Intermedio (Negocio)">
                <input type="hidden" name="plan_precio" value="69990">
                <input type="number" required class="form-control mb-2" name="cantidad" placeholder="Cantidad" min="1">
                <button type="submit" class="btn btn-primary">Comprar</button>
                </div>
                
        </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <form action="" method="POST">
                <div class="card-body">
                    <h2 class="card-title">Plan Premium</h2>
                    <p class="card-text">910 MB</p>
                    <p class="card-text">Telefonía</p>
                    <p class="card-text">3 WiFi 360</p>
                    <p class="card-text">$119.990</p>
                    <input type="hidden" name="plan_id" value="12">
                <input type="hidden" name="plan_nombre" value="Plan Premium (Negocio)">
                <input type="hidden" name="plan_precio" value="119990">
                <input type="number" required class="form-control mb-2" name="cantidad" placeholder="Cantidad" min="1">
                <button type="submit" class="btn btn-primary">Comprar</button>
                </div>
                
        </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>