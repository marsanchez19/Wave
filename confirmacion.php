<?php
include('C:/xampp/htdocs/proyecto finish/Wave/conexion.php');

// Obtén los detalles del carrito desde la sesión (puedes ajustar esto según cómo estés manejando el carrito)
session_start();
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

// Insertar detalles de la orden en la tabla "detallesordenes"
if (!empty($carrito)) {
    // Insertar una orden en la tabla "ordenes" (suponiendo que tienes una tabla para las órdenes)
    $insertarOrden = mysqli_query($conexion, "INSERT INTO ordenes (fecha) VALUES (NOW())");
    
    if ($insertarOrden) {
        $idOrden = mysqli_insert_id($conexion); // Obtener el ID de la orden recién insertada

        // Recorrer el carrito y guardar los detalles en la tabla "detallesordenes"
        foreach ($carrito as $producto) {
            $idProducto = $producto['id_producto'];
            $cantidad = $producto['cantidad'];
            $precioUnitario = $producto['precio_unitario'];

            $insertarDetalle = mysqli_query($conexion, "INSERT INTO detallesordenes (id_orden, id_producto, cantidad, precio_unitario) VALUES ('$idOrden', '$idProducto', '$cantidad', '$precioUnitario')");
            
            // Puedes manejar errores o mensajes de éxito aquí según lo que necesites
        }

        // Puedes limpiar el carrito después de completar la orden
        unset($_SESSION['carrito']);

        echo "¡Orden confirmada exitosamente!"; // Puedes redirigir o mostrar un mensaje según tus necesidades
    } else {
        echo "Error al insertar la orden: " . mysqli_error($conexion);
    }
} else {
    echo "El carrito está vacío. Agrega productos antes de confirmar la orden.";
}
?>