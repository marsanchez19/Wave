<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Wave</title>
    <style>
        body {
        background-image: url('img/desenfoq.jpg'); /* Establece la imagen de fondo */
        background-size: cover; /* Asegura que la imagen cubra todo el fondo */
        background-position: center; /* Centra la imagen en la página */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        background-attachment: fixed; /* Opcional: hace que el fondo sea fijo al hacer scroll */
        /* Otros estilos previos... */
        }
        .navbar-dark {
            background-color: #0E2148;
        }
        .vertical-divider {
            border-left: 1px solid #ffffff;
            height: 30px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .navbar-brand > span {
            font-size: 1.5rem;
            font-weight: bold;
            text-shadow: 2px 2px #000000;
        }
        .nav-link, .navbar-brand, .nav-item span {
            color: #ffffff !important;
            font-size: 1rem;
        }
        .category-buttons {
            text-align: center;
            margin-top: 30px;
        }
        .category-button {
            background-color: #0E2148;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .plan-container {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .card {
            margin: 20px auto;
            width: 80%;
        }
        .btn-primary {
            background-color: #0E2148;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/sinfond.png" alt="Logo" style="width:40px;" class="rounded-pill"> <span>Wave</span>
            </a>
            <div class="vertical-divider"></div>
            <a class="nav-link" href="inicio.php">Inicio</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link">Bienvenido</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
                </li>
                <div class="vertical-divider d-flex align-items-center"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="category-buttons">
        <button class="category-button" onclick="showPlan('moviles')">MÓVILES</button>
        <button class="category-button" onclick="showPlan('hogar')">HOGAR</button>
        <button class="category-button" onclick="showPlan('negocios')">NEGOCIOS</button>
    </div>

    <div id="moviles" class="plan-container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-body">
                            <h2 class="card-title">Plan Básico</h2>
                            <p class="card-text">90 GB</p>
                            <p class="card-text">Minutos ilimitados a todo destino</p>
                            <p class="card-text">SMS ilimitados</p>
                            <p class="card-text">$29.990</p>
                            <input type="hidden" name="plan_id" value="4">
                            <input type="hidden" name="plan_nombre" value="Plan Básico (Móvil)">
                            <input type="hidden" name="plan_precio" value="29990">
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
                            <p class="card-text">150 GB</p>
                            <p class="card-text">Minutos ilimitados a todo destino</p>
                            <p class="card-text">SMS ilimitados</p>
                            <p class="card-text">$59.990</p>
                            <input type="hidden" name="plan_id" value="5">
                            <input type="hidden" name="plan_nombre" value="Plan Intermedio (Móvil)">
                            <input type="hidden" name="plan_precio" value="59990">
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
                            <p class="card-text">Datos ilimitados</p>
                            <p class="card-text">Minutos ilimitados a todo destino</p>
                            <p class="card-text">SMS ilimitados</p>
                            <p class="card-text">$99.990</p>
                            <input type="hidden" name="plan_id" value="6">
                            <input type="hidden" name="plan_nombre" value="Plan Premium (Móvil)">
                            <input type="hidden" name="plan_precio" value="99990">
                            <input type="number" required class="form-control mb-2" name="cantidad" placeholder="Cantidad" min="1">
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="hogar" class="plan-container">
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
                            <h2 class="card-title">Dúo Fibra</h2>
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
                            <p class="card-text">90 canales + 10 canales HD</p>
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

   

    <script>
        function showPlan(planType) {
            // Hide all plan containers
            var containers = document.querySelectorAll('.plan-container');
            containers.forEach(function(container) {
                container.style.display = 'none';
            });

            // Show the selected plan container
            var containerToShow = document.getElementById(planType);
            containerToShow.style.display = 'block';
        }
    </script>
</body>
</html>