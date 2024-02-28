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
                <a class="nav-link" href="catalogo/moviles.html">Móviles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogo/hogar.html">Hogar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogo/negocios.html">Negocios</a>
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
            <li class="list-group-item">
                Móvil plan básico 
                <span class="precio">Precio: $29.990                </span>
                <span class="cantidad">Cantidad: 10</span>
                <button class="btn btn-danger btn-sm" onclick="eliminarProducto(this)">Eliminar</button>
              </li>        </ul>
        <div class="card-body">
          <h5 class="card-title">Total: $<span id="total">299.900</span></h5>
          <button class="btn btn-primary">Pagar</button>
          <button class="btn btn-secondary">Vaciar Carrito</button>
        </div>
      </div>
    </div>
</body>
</html>