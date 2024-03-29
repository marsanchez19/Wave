<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wave</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .custom-navbar {
      background-color: #0E2148;
    }
  </style>
</head>

<body class="bg-body-secondary d-flex justify-content-center align-items-center vh-100">
  <nav class="navbar navbar-expand-sm custom-navbar navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/sinfond.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
        <span style="margin-left: 10px; color: white;">Wave</span>
      </a>
    </div>
  </nav>
  <div class="bg-white p-5 rounded-5 text-secondary mt-5">
    <div class="d-flex justify-content-center">
      <img src="img/lgin.png" alt="login.icon" style="height: 7rem;">
    </div>
    <div class="text-center fw-bold mt-3">INICIO DE SESION</div>
    <form action="loginbd.php" method="POST">
      <div><input class="form-control mt-3" type="text" placeholder="Usuario" name="usuario"></div>
      <div><input class="form-control mt-3" type="password" placeholder="Contraseña" name="contrasena"></div>
      <button type="submit" class="btn btn-primary mt-3 w-100" onclick="window.location.href='menu.php'">INGRESAR</button>
    </form>
  </div>
</body>

</html>
