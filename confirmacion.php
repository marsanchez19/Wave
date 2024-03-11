<?php
include('C:/xampp/htdocs/proyecto finish/Wave/conexion.php');

session_start();
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

if (!empty($carrito)) {
  
    $insertarOrden = mysqli_query($conexion, "INSERT INTO ordenes (fecha) VALUES (NOW())");
    
    if ($insertarOrden) {
        $idOrden = mysqli_insert_id($conexion); 

        foreach ($carrito as $producto) {
            $idProducto = $producto['id_producto'];
            $cantidad = $producto['cantidad'];
            $precioUnitario = $producto['precio_unitario'];

            $insertarDetalle = mysqli_query($conexion, "INSERT INTO detallesordenes (id_orden, id_producto, cantidad, precio_unitario) VALUES ('$idOrden', '$idProducto', '$cantidad', '$precioUnitario')");
        }

        unset($_SESSION['carrito']); // Esto debería ir después del ciclo foreach.

        echo "¡Orden confirmada exitosamente!"; // Esto también.
    } else {
        echo "Error al insertar la orden: " . mysqli_error($conexion);
    }
} else {
    echo "El carrito está vacío. Agrega productos antes de confirmar la orden.";
}
?>