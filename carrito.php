<?php
session_start();
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    unset($_SESSION['carrito'][$indice]);
    
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
  
    header('Location: carrito.php');
}
if (isset($_GET['vaciarCarrito'])) {
    unset($_SESSION['carrito']); 
    header('Location: carrito.php');
    exit(); 
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
    <link rel="icon" href="img/logo.png" type="imagen">
    <title>Wave</title>
    <style>
        .contenedor{
            display: flex;
    justify-content: center; 
    align-items: center; 
    min-height: 80vh; 
        }
        .navbar-nav{
    margin-left: auto ;
}
#listaProductos .list-group-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

    </style>
  
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark" style="background-color: #0E2148;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/sinfond.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            <span style="margin-left: 10px; color: white;">Wave</span>
          </a>
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
            </ul>
          </div>
        </div>
      </nav>
    <div class="contenedor">
        <div class="card" id="carritoCompras" style="width: 50rem;">
            <div class="card-header">
              Carrito de Compras
            </div>
            <ul class="list-group list-group-flush" id="listaProductos">
                <?php
                if (!empty($_SESSION['carrito'])) {
                    foreach ($_SESSION['carrito'] as $indice => $producto) { 
                        $total += $producto['precio_plan'] * $producto['cantidad'];
                        echo "<li class='list-group-item'>";
                        echo htmlspecialchars($producto['nombre_plan']);
                        echo "<span class='precio'>Precio: $" . htmlspecialchars($producto['precio_plan']) . "</span>";
                        echo "<span class='cantidad'>Cantidad: " . htmlspecialchars($producto['cantidad']) . "</span>";
                        echo "<a href='carrito.php?eliminar=" . $indice . "' class='btn btn-danger btn-sm'>Eliminar</a>";
                        echo "</li>";
                    }
                }                
                ?>
            </ul>
            <div class="card-body">
                <h5 class="card-title">Total: $<span id="total"><?php echo $total; ?></span></h5>
                <a href="formulario.php" class="btn btn-primary">Pagar</a>
                <a href="carrito.php?vaciarCarrito=true" class="btn btn-secondary">Vaciar Carrito</a>

            </div>
        </div>
    </div>

</body>
</html>