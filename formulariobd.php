<?php

session_start();
include ('C:/xampp/htdocs/proyecto finish/Wave/conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres_completos = $_POST['nombres_completos'];
    $apellidos_completos = $_POST['apellidos_completos'];
    $fecha_real = $_POST['fecha_real'];
    $identidad = $_POST['identidad'];
    $email = $_POST['email'];
    $direcc_ubi = $_POST['direcc_ubi'];
    $id_usuario = 1;
    $fecha_compra = date("Y-m-d", time());
    $total_orden=$_POST['total_orden'];

    $query = "INSERT INTO ordenes (id_usuario,total_orden,nombres_completos, apellidos_completos, fecha_real, identidad, email, direcc_ubi,fecha_compra)
              VALUES (?, ?,?, ?, ?, ?, ?,?,?)";

    $stmt = mysqli_prepare($conexion, $query);

    mysqli_stmt_bind_param($stmt, "sssssssss", $id_usuario,$total_orden,$nombres_completos, $apellidos_completos, $fecha_real, $identidad, $email, $direcc_ubi,$fecha_compra);

    $ejecutar = mysqli_stmt_execute($stmt);
    $id_ordenes = mysqli_insert_id($conexion);
    if ($ejecutar) {
        $id_ordenes = mysqli_insert_id($conexion);

        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $producto) {
                $producto_id = $producto['id_plan'];
                $cantidad = $producto['cantidad'];

                $queryDetalle = "INSERT INTO detallesorden (cantidad, id_producto, id_orden) VALUES (?, ?, ?)";
                if ($stmtDetalle = mysqli_prepare($conexion, $queryDetalle)) {
                    mysqli_stmt_bind_param($stmtDetalle, "iii", $cantidad, $producto_id, $id_ordenes);

                    $ejecutarDetalle = mysqli_stmt_execute($stmtDetalle);
                    if (!$ejecutarDetalle) {
                        echo "Error al guardar el detalle de la orden en la base de datos: " . mysqli_error($conexion);
                    }
                    mysqli_stmt_close($stmtDetalle);
                } else {
                    echo "Error al preparar la consulta de detalle de la orden: " . mysqli_error($conexion);
                }
            }
        }
        
        
    
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
        unset($_SESSION['carrito']);
        header("Location: Lfinal.php");
        exit();
    } else {
        echo "Error al guardar en la base de datos: " . mysqli_error($conexion);
    }
}
?>
