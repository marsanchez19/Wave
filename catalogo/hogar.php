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
    <title>Wave</title>
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
          <a class="nav-link" href="negocios.php">Negocios</a>
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
  <h1 class="mb-4">Hogar</h1>
  <div class="row">
      <div class="col-md-4">
          <div class="card">
            
      <form action="" method="POST">
              <div class="card-body">
                  <h2 class="card-title">Plan Internet</h2>
                  <p class="card-text">800 MB</p>
                  <p class="card-text">Sin telefonía</p>
                  <p class="card-text">$89.990</p>
                  <input type="hidden" name="plan_id" value="7">
                <input type="hidden" name="plan_nombre" value="Plan Internet (Hogar)">
                <input type="hidden" name="plan_precio" value="89990">
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
                  <h2 class="card-title">Dúo fibra</h2>
                  <p class="card-text">800 MB</p>
                  <p class="card-text">Telefonía</p>
                  <p class="card-text">$95.990</p>
                  
                  <input type="hidden" name="plan_id" value="8">
                <input type="hidden" name="plan_nombre" value="Dúo Fibra (Hogar)">
                <input type="hidden" name="plan_precio" value="95990">
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
                  <h2 class="card-title">Trío Fibra</h2>
                  <p class="card-text">Internet, Telefonía</p>
                  <p class="card-text">90 canales+ 10 canales HD</p>
                  <p class="card-text">$99.990</p>
                  
                  <input type="hidden" name="plan_id" value="9">
                <input type="hidden" name="plan_nombre" value="Trío Fibra (Hogar)">
                <input type="hidden" name="plan_precio" value="99990">
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