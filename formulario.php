<?php
session_start();
$total = 0;
if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = array();
}
foreach ($_SESSION['carrito'] as $producto) {
    $total += $producto['precio_plan'] * $producto['cantidad'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagos - Wave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      padding-top: 4.5rem;
    }

    .form-section {
      max-width: 600px;
      margin: 5rem auto 2rem;
      padding: 2rem;
    }

    .section-title {
      background-color: #0E2148;
      color: white;
      padding: 1rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1rem; 
    }

    .form-subtitle {
      font-weight: bold;
      margin-top: 2rem;
    }
  </style>
</head>

<body class="bg-body-secondary">
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark" style="background-color: #0E2148;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/sinfond.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
        <span style="margin-left: 10px; color: white;">Wave</span>
      </a>
    </div>
  </nav>

  <div class="bg-white p-5 rounded-5 text-secondary form-section">
    <div class="section-title">PAGOS</div>
    <form action="formulariobd.php" method="POST">

      <div  class="form-subtitle mt-4">DATOS PERSONALES</div>
      <div class="row">
        <div class="col-md-6">
          <input class="form-control mt-3" type="text" required placeholder="Nombres" name="nombres_completos">
        </div>
        <div class="col-md-6">
          <input class="form-control mt-3" type="text" required placeholder="Apellidos" name="apellidos_completos">
        </div>
        <div class="col-md-5">
         <label for="fechaNacimiento">
        <input class="form-control mt-3" type="text" required id="fechaNacimiento" onfocus="this.type='date'" onblur="this.type='text'" placeholder="Fecha de Nacimiento" name="fecha_real">
         </label>
        </div>
        <div class="col-md-7">
          <input class="form-control mt-3" type="text" required placeholder="Cédula" name="identidad">
        </div>      
        <div class="col-md-12">
          <input class="form-control mt-3" type="email" required placeholder="Correo" name="email">
        </div>
        <div class="col-md-12">
          <input class="form-control mt-3" type="text" required placeholder="Dirección de Envío/Instalación" name="direcc_ubi">
        </div>
      </div>

      <div class="form-subtitle mt-4">PROCESO DE PAGO</div>
      <div class="row">
        <div class="col-md-12">
          <select class="form-select mt-3" aria-label="Seleccionar tipo de tarjeta">
            <option selected disabled>Seleccionar Tipo</option>
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
          </select>
        </div>
        <div class="col-md-12">
          <input class="form-control mt-3" type="text" placeholder="Número de Tarjeta">
        </div>
        <div class="col-md-12">
          <input class="form-control mt-3" type="text" placeholder="Titular de la Tarjeta">
        </div>
        <div class="col-md-3">
          <input class="form-control mt-3" type="month" placeholder="">
        </div>
        <div class="col-md-3">
          <input class="form-control mt-3" type="text" placeholder="Código" pattern="\d{3}" maxlength="3" oninput="this.value=this.value.replace(/\D/g,'')">
        </div>
      </div>

      <div class="form-subtitle mt-4">OTRO MEDIO DE PAGO</div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="pagaAlRecibir">
        <label class="form-check-label" for="pagaAlRecibir">PAGA AL RECIBIR</label>
      </div>
      <div class="form-subtitle mt-4">Total a Pagar</div>
<div class="row">
    <div class="col-12">
    <input type="hidden" value="<?php echo $total; ?>" name="total_orden">

        <p class="form-control mt-3">Total: $<?php echo number_format($total, 2); ?></p>
    </div>
</div>
      <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-secondary btn-block" type="submit" name="cancelar">Cancelar</button>
        <button class="btn btn-primary btn-block" type="submit" name="pagar">Pagar</button>
      </div>
      
    </form>
  </div>
</body>

</html>
