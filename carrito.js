// Código JavaScript para manejar el carrito

function agregarAlCarrito(plan) {
    const cantidadInput = document.getElementById(`cantidadCompra${plan}`);
    const cantidad = parseInt(cantidadInput.value);

    if (cantidad > 0) {
        // Envía la información al carrito (puedes implementar AJAX aquí)
        console.log(`Agregando Plan ${plan} al carrito. Cantidad: ${cantidad}`);
        agregarProductoAlCarrito(`Plan ${plan}`, cantidad, obtenerPrecioUnitario(plan));

        // Limpia el input
        cantidadInput.value = '';
    } else {
        alert('La cantidad debe ser mayor a 0');
    }
}

function agregarProductoAlCarrito(nombre, cantidad, precioUnitario) {
    console.log(`Agregando ${cantidad} ${nombre}(s) al carrito. Precio unitario: $${precioUnitario.toFixed(2)}`);
    const listaProductos = document.getElementById('listaProductos');
    const totalElemento = document.getElementById('total');

    // Crear elemento de lista para el nuevo producto
    const nuevoProducto = document.createElement('li');
    nuevoProducto.classList.add('list-group-item');
    nuevoProducto.innerHTML = `
        ${nombre}
        <span class="precio">Precio: $${precioUnitario.toFixed(2)}</span>
        <span class="cantidad">Cantidad: ${cantidad}</span>
        <button class="btn btn-danger btn-sm" onclick="eliminarProducto(this)">Eliminar</button>
    `;

    // Agregar el nuevo producto a la lista
    listaProductos.appendChild(nuevoProducto);

    // Actualizar el total
    const totalActual = parseFloat(totalElemento.innerText);
    const nuevoTotal = totalActual + cantidad * precioUnitario;
    totalElemento.innerText = nuevoTotal.toFixed(2);
}

function eliminarProducto(botonEliminar) {
    console.log('Eliminando producto del carrito');
    const producto = botonEliminar.parentNode;
    const listaProductos = producto.parentNode;
    const totalElemento = document.getElementById('total');

    // Obtener el precio del producto a eliminar
    const precioTexto = producto.querySelector('.precio').innerText;
    const precio = parseFloat(precioTexto.split('$')[1]);

    // Obtener la cantidad del producto a eliminar
    const cantidadTexto = producto.querySelector('.cantidad').innerText;
    const cantidad = parseInt(cantidadTexto.split(' ')[1]);

    // Restar el precio del producto eliminado al total
    const totalActual = parseFloat(totalElemento.innerText);
    const nuevoTotal = totalActual - cantidad * precio;
    totalElemento.innerText = nuevoTotal.toFixed(2);

    // Eliminar el producto de la lista
    listaProductos.removeChild(producto);
}

// Función de ejemplo para obtener el precio unitario basado en el plan
function obtenerPrecioUnitario(plan) {
    // Aquí puedes implementar la lógica para obtener el precio del plan seleccionado
    // Por ahora, se devolverá un valor fijo para demostración
    const preciosFijos = {
        1: 29990,
        2: 59990,
        3: 99990,
        4: 89990,
        5: 95990,
        6: 99990,
        7: 49990,
        8: 69990,
        9: 119990,
    };
    return preciosFijos[plan];
}
