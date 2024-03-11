<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Aquí verificamos si la solicitud es AJAX
if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
    if (isset($_POST['plan_id'], $_POST['plan_nombre'], $_POST['plan_precio'], $_POST['cantidad'])) {
        $plan = array(
            "id_plan" => $_POST['plan_id'],
            "nombre_plan" => $_POST['plan_nombre'],
            "precio_plan" => $_POST['plan_precio'],
            "cantidad" => $_POST['cantidad']
        );

        $_SESSION['carrito'][] = $plan;

        // En lugar de redirigir o recargar, devolvemos una respuesta JSON
        echo json_encode(["success" => true, "message" => "Producto agregado al carrito"]);
        exit;
    }
    if (isset($_POST['accion']) && $_POST['accion'] === 'obtenerCarrito') {
        // Asumiendo que quieres devolver todo el carrito como respuesta
        echo json_encode(["carrito" => $_SESSION['carrito']]);
        exit;
    }
}
?>