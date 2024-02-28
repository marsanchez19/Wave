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
    <form action="formulariobd.php" method="POST"></form>

    <div  class="form-subtitle mt-4">DATOS PERSONALES</div>
    <div class="row">
      <div class="col-md-6">
        <input class="form-control mt-3" type="text" placeholder="Nombres" name="nombres_completos">
      </div>
      <div class="col-md-6">
        <input class="form-control mt-3" type="text" placeholder="Apellidos" name="apellidos_completos">
      </div>
      <div class="col-md-5">
        <label for="fechaNacimiento">
        <input class="form-control mt-3" type="text" id="fechaNacimiento" name="fechaNacimiento" onfocus="this.type='date'" onblur="this.type='text'" placeholder="Fecha de Nacimiento" name="fecha_real">
    </div>
      <div class="col-md-7">
        <input class="form-control mt-3" type="text" placeholder="Cédula" name="identidad">
      </div>      
      <div class="col-md-12">
        <input class="form-control mt-3" type="email" placeholder="Correo" name="email">
      </div>
      <div class="col-md-12">
        <input class="form-control mt-3" type="text" placeholder="Dirección de Envío/Instalación" name="direcc_ubi">
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
    <div class="d-flex justify-content-center mt-4">
    <form action="menu.php" class="me-2">
        <button class="btn btn-secondary btn-block" type="submit">Cancelar</button>
    </form>
    <form action="formulariobd.php" method="POST">
        <button class="btn btn-primary btn-block" name="pagar">Pagar</button>
    </form>
    </div>
    </div>
  </div>
</body>

</html>