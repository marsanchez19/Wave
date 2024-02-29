<?php
include ('C:/xampp/htdocs/proyecto finish/Wave/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE id_nombre_usuario = ? AND contrasena = ?";
    $stmt = mysqli_prepare($conexion, $query);

    if (!$stmt) {
        die('Error en la preparación de la consulta: ' . mysqli_error($conexion));
    }

    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contrasena);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        session_start();
        $_SESSION['usuario_id'] = $row['id_usuario'];

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header("Location: menu.php");
        exit();
    } else {
        
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
