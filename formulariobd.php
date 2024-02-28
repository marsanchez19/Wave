
<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombres_completos = $_POST['nombres_completos'];
    $apellidos_completos = $_POST['apellidos_completos'];
    $fecha_real = $_POST['fecha_real'];
    $identidad = $_POST['identidad'];
    $email = $_POST['email'];
    $direcc_ubi = $_POST['direcc_ubi'];


    $query = "INSERT INTO usuarios (nombres_completos, apellidos_completos, fecha_real, identidad, email, direcc_ubi)
              VALUES ('nombres_completos', 'apellidos_completos', 'fecha_real', 'identidad', 'email', 'direcc_ubi')";

    $stmt = mysqli_prepare($conexion, $query);

    mysqli_stmt_bind_param($stmt, "ssssss", $nombres_completos, $apellidos_completos, $fecha_real, $identidad, $email, $direcc_ubi);

    $ejecutar = mysqli_stmt_execute($stmt);

    if ($ejecutar) {
        header("Location: Lfinal.php");
        exit();
    } else {
        echo "Error al guardar en la base de datos: " . mysqli_error($conexion);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
