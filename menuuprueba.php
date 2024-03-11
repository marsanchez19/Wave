<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
?>

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
    background-image: url('img/desenfoq.jpg');
    background-size: 100% 100%; /* Fuerza a la imagen a ocupar todo el espacio */
    background-position: center; /* Centra la imagen de fondo */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    min-height: 100vh; 
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
    .carritoDesplegable {
    position: absolute;
    right: 0;
    top: 50px; /* Ajusta según sea necesario */
    background-color: white;
    color: black;
    border: 1px solid #ddd;
    padding: 10px;
    width: 300px; /* Ajusta según sea necesario */
    display: none;
    z-index: 1000; /* Asegura que se muestre por encima de otros elementos */
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
        transition: background-color 0.3s ease;
    }
    .category-button-active {
        background-color: #0D47A1; /* Azul de Bootstrap que se asemeja a blue-600 */
        color: white; /* Cambio el color del texto a blanco para mejor contraste */
    }
    .plan-container {
        text-align: center;
        margin-top: 20px;
        display: none; /* Inicialmente escondido */
    }
    .carrito-lleno {
    color: red !important;
}
    .card {
        margin: 20px auto;
        width: 100%; /* Controla el ancho */
        max-width: 300px; /* Ancho máximo para mantener los cuadros proporcionales */
        display: none; /* Inicialmente escondidos */
        border-radius: 15px; /* Añade bordes redondeados */
    }
    .btn-primary {
        background-color: #0E2148;
        margin-top: 20px; /* Espacio adicional arriba del botón Comprar */
    }
    .navigation {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        gap: 20px; /* Espacio entre los elementos flex */
    }
    .quantity-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px; /* Espacio debajo del contenedor de cantidad */
    }
    .quantity-controls .btn-secondary {
        padding: 0.375rem 0.75rem; /* Ajusta el padding según necesites */
        height: 38px; /* Altura estandarizada para alineación */
        color: #333; /* Cambia el color del texto para mejorar la legibilidad */
        background-color: transparent; /* Hace el fondo del botón transparente */
        border: none; /* Elimina el borde del botón */
        box-shadow: none; /* Elimina cualquier sombra que pueda tener el botón */
    }

    .quantity-input {
        width: 50px; /* Ajusta el ancho según necesites */
        text-align: center;
        margin: 0 5px; /* Añade un pequeño espacio entre los botones y el input */
        border: none; /* Remueve los bordes del input */
        background-color: #EEEE; /* Hace el fondo del input transparente */
        color: #333; /* Ajusta el color del texto para asegurar que sea legible */
        font-size: 1rem; /* Ajusta el tamaño de la fuente */
        height: 30px; /* Asegura que el input tenga la misma altura que los botones */
        line-height: 38px; /* Centra verticalmente el texto dentro del input */
        position: relative;
        top: 4px; /* Ajuste fino si es necesario */
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
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart <?php echo !empty($_SESSION['carrito']) ? 'carrito-lleno' : ''; ?>"></i>
                    </a>
                    <div id="carritoDesplegable" class="carritoDesplegable" style="display: none;">
    <!-- Los elementos del carrito se añadirán aquí -->
</div>

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
        <div class="col-md-12"> <!-- Ajuste para que solo se muestre un plan a la vez -->
            <div class="card" style="display:block;"> <!-- Primer plan visible inicialmente -->
            <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Básico</h2>
                        <p class="card-text">90 GB</p>
                        <p class="card-text">Minutos ilimitados a todo destino</p>
                        <p class="card-text">SMS ilimitados</p>
                        <p class="card-text">$29.990</p>
                        <input type="hidden" name="plan_id" value="4">
                        <input type="hidden" name="plan_nombre" value="Plan Básico (Móvil)">
                        <input type="hidden" name="plan_precio" value="29990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card"> <!-- Los otros planes inicialmente ocultos -->
            <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Intermedio</h2>
                        <p class="card-text">150 GB</p>
                        <p class="card-text">Minutos ilimitados a todo destino</p>
                        <p class="card-text">SMS ilimitados</p>
                        <p class="card-text">$59.990</p>
                        <input type="hidden" name="plan_id" value="5">
                        <input type="hidden" name="plan_nombre" value="Plan Intermedio (Móvil)">
                        <input type="hidden" name="plan_precio" value="59990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card">
            <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Premium</h2>
                        <p class="card-text">Datos ilimitados</p>
                        <p class="card-text">Minutos ilimitados a todo destino</p>
                        <p class="card-text">SMS ilimitados</p>
                        <p class="card-text">$99.990</p>
                        <input type="hidden" name="plan_id" value="6">
                        <input type="hidden" name="plan_nombre" value="Plan Premium (Móvil)">
                        <input type="hidden" name="plan_precio" value="99990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navigation">
        <button class="btn btn-primary" onclick="navigate('moviles', -1)">&lt;</button>
        <button class="btn btn-primary" onclick="navigate('moviles', 1)">&gt;</button>
    </div>
</div>
<div id="hogar" class="plan-container">
    <div class="row">
        <div class="col-md-12"> <!-- Cambio para ajustar la visualización de un solo plan a la vez -->
            <div class="card" style="display:block;"> <!-- Plan Internet visible inicialmente -->
            <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Internet</h2>
                        <p class="card-text">800 MB</p>
                        <p class="card-text">Sin telefonía</p>
                        <p class="card-text">$89.990</p>
                        <input type="hidden" name="plan_id" value="7">
                        <input type="hidden" name="plan_nombre" value="Plan Internet (Hogar)">
                        <input type="hidden" name="plan_precio" value="89990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card"> <!-- Los siguientes planes inicialmente ocultos -->
            <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Dúo Fibra</h2>
                        <p class="card-text">800 MB</p>
                        <p class="card-text">Telefonía</p>
                        <p class="card-text">$95.990</p>
                        <input type="hidden" name="plan_id" value="8">
                        <input type="hidden" name="plan_nombre" value="Dúo Fibra (Hogar)">
                        <input type="hidden" name="plan_precio" value="95990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Trío Fibra</h2>
                        <p class="card-text">Internet, Telefonía</p>
                        <p class="card-text">90 canales + 10 canales HD</p>
                        <p class="card-text">$99.990</p>
                        <input type="hidden" name="plan_id" value="9">
                        <input type="hidden" name="plan_nombre" value="Trío Fibra (Hogar)">
                        <input type="hidden" name="plan_precio" value="99990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                         <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navigation">
        <button class="btn btn-primary" onclick="navigate('hogar', -1)">&lt;</button>
        <button class="btn btn-primary" onclick="navigate('hogar', 1)">&gt;</button>
    </div>
</div>

<div id="negocios" class="plan-container">
    <div class="row">
        <div class="col-md-12"> <!-- Ajuste para mostrar un solo plan a la vez -->
            <div class="card" style="display:block;"> <!-- Plan Básico visible inicialmente -->
                <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Básico</h2>
                        <p class="card-text">500 MB</p>
                        <p class="card-text">Telefonía</p>
                        <p class="card-text">1 Wifi 360</p>
                        <p class="card-text">$49.990</p>
                        <input type="hidden" name="plan_id" value="10">
                        <input type="hidden" name="plan_nombre" value="Plan Básico (Negocio)">
                        <input type="hidden" name="plan_precio" value="49990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card"> <!-- Los siguientes planes inicialmente ocultos -->
                <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Intermedio</h2>
                        <p class="card-text">700 MB</p>
                        <p class="card-text">Telefonía</p>
                        <p class="card-text">2 Wifi 360</p>
                        <p class="card-text">$69.990</p>
                        <input type="hidden" name="plan_id" value="11">
                        <input type="hidden" name="plan_nombre" value="Plan Intermedio (Negocio)">
                        <input type="hidden" name="plan_precio" value="69990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <form class="formAgregarCarrito" method="POST">
                    <div class="card-body">
                        <h2 class="card-title">Plan Premium</h2>
                        <p class="card-text">910 MB</p>
                        <p class="card-text">Telefonía</p>
                        <p class="card-text">3 Wifi 360</p>
                        <p class="card-text">$119.990</p>
                        <input type="hidden" name="plan_id" value="12">
                        <input type="hidden" name="plan_nombre" value="Plan Premium (Negocio)">
                        <input type="hidden" name="plan_precio" value="119990">
                        <div class="quantity-controls">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('decrement', this)">-</button>
                        <input type="number" required class="form-control mb-2 quantity-input" name="cantidad" placeholder="Cantidad" min="1" value="1">
                        <button type="button" class="btn btn-secondary" onclick="changeQuantity('increment', this)">+</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navigation">
        <button class="btn btn-primary" onclick="navigate('negocios', -1)">&lt;</button>
        <button class="btn btn-primary" onclick="navigate('negocios', 1)">&gt;</button>
    </div>
</div>
<script>
    function showPlan(category) {
        var containers = document.querySelectorAll('.plan-container');
        containers.forEach(function(container) {
            container.style.display = 'none';
        });

        var containerToShow = document.getElementById(category);
        containerToShow.style.display = 'block';

        var plans = containerToShow.querySelectorAll('.card');
        plans.forEach(plan => plan.style.display = 'none');
        plans[0].style.display = 'block';

        var buttons = document.querySelectorAll('.category-button');
        buttons.forEach(function(btn) {
            if (btn.getAttribute('onclick').includes(`'${category}'`)) {
                btn.classList.add('category-button-active');
            } else {
                btn.classList.remove('category-button-active');
            }
        });
    }

    function navigate(category, direction) {
        var container = document.getElementById(category);
        var plans = container.querySelectorAll('.card');
        var currentIndex = Array.from(plans).findIndex(plan => plan.style.display === 'block');
        var newIndex = currentIndex + direction;

        if (newIndex < 0) newIndex = plans.length - 1;
        if (newIndex >= plans.length) newIndex = 0;

        plans[currentIndex].style.display = 'none';
        plans[newIndex].style.display = 'block';
    }
    function changeQuantity(action, element) {
    var input = element.parentNode.querySelector('.quantity-input');
    var currentValue = parseInt(input.value, 10);
    
    if (action === 'increment') {
        currentValue += 1;
    } else if (action === 'decrement' && currentValue > 1) {
        currentValue -= 1;
    }
    
    input.value = currentValue;
}
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona todos los formularios por su clase
    var forms = document.querySelectorAll('.formAgregarCarrito');
    actualizarCarrito();
    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Previene el envío tradicional del formulario

            // Recoge los datos del formulario
            var formData = new FormData(form);

            // Envía los datos del formulario a 'menuservice.php' usando fetch
            fetch('menuservice.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // Esto asegura que $_SERVER['HTTP_X_REQUESTED_WITH'] esté presente
                },
            })
            .then(response => response.json()) // Convierte la respuesta en JSON
            .then(data => {
    console.log(data);
    if(data.success) {
        alert(data.message);
        // Aquí añades la lógica para actualizar el ícono del carrito
        document.querySelector('.fas.fa-shopping-cart').classList.add('carrito-lleno');
        actualizarCarrito();
    }
})
            .catch(error => console.error('Error:', error));
        });
    });
});
document.querySelector('.fa-shopping-cart').parentNode.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('estoy aqui');
    var carritoDesplegable = document.getElementById('carritoDesplegable');
    carritoDesplegable.style.display = carritoDesplegable.style.display === 'none' ? 'block' : 'none';
    // Llama aquí a una función que actualice el contenido del carrito desplegable si ya está definida.
});
function actualizarCarrito() {
    fetch('menuservice.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: 'accion=obtenerCarrito' // Envía una acción específica si es necesario distinguir en el servidor
    })
    .then(response => response.json())
    .then(data => {
        var desplegable = document.getElementById('carritoDesplegable');
        desplegable.innerHTML = ''; // Limpiar el contenido actual
        let total = 0;
        
        // Construir los elementos del carrito
        data.carrito.forEach(item => {
            let subtotal = item.cantidad * item.precio_plan;
            total += subtotal;
            desplegable.innerHTML += `<div>${item.nombre_plan} - Cantidad: ${item.cantidad} - Subtotal: $${subtotal}</div>`;
        });
        
        // Agregar el total y los botones de acción
        desplegable.innerHTML += `<div>Total: $${total}</div>`;
        desplegable.innerHTML += `<button onclick="vaciarCarrito()">Vaciar Carrito</button>`;
        desplegable.innerHTML += `<button onclick="pagarCarrito()">Pagar</button>`;
    })
    .catch(error => console.error('Error:', error));
}

</script>
</body>
</html>