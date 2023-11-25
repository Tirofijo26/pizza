<?php
session_start();

if (!empty($_POST)) {
    include 'Conexion/conexion.php';

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM Admin WHERE user_admin = '$user' AND pass_admin = '$pass'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        // Credenciales válidas, establecer la sesión y redirigir
        $_SESSION["user"] = $user;
        header('Location: ../index.php');
        exit();
    } else {
        // Credenciales inválidas, redirigir al formulario de inicio de sesión
        header('Location: ../login.php');
        exit();
    }
} else {
    // No se enviaron datos POST, redirigir al formulario de inicio de sesión
    header('Location: ../login.php');
    exit();
}
?>
