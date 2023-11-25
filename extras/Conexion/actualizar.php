<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexion.php';
    session_start();

    // Recuperar los datos del formulario
    $idUsuario = $_POST['user-id'];
    $nuevoNombre = $_POST['user-name'];
    $nuevoApellido = $_POST['user-last-name'];
    $nuevoTelefono = $_POST['user-phone'];

    // Obtener el estado del usuario actual
    $obtenerEstado = "SELECT estado_usuario FROM usuarios WHERE ID_Usuario = $idUsuario";
    $resultadoEstado = mysqli_query($conexion, $obtenerEstado);
    $filaEstado = mysqli_fetch_assoc($resultadoEstado);
    $estadoUsuario = $filaEstado['estado_usuario'];

    // Verificar que el nuevo teléfono no esté registrado para otro usuario activo
    if ($estadoUsuario == 'Activo') {
        $verificarTelefono = "SELECT ID_Usuario FROM usuarios WHERE phone = '$nuevoTelefono' AND estado_usuario = 'Activo' AND ID_Usuario != $idUsuario";
        $resultado = mysqli_query($conexion, $verificarTelefono);

        if (mysqli_num_rows($resultado) > 0) {
            // El teléfono ya está registrado para otro usuario activo
            $_SESSION['mensaje'] = "El teléfono ya está registrado para otro usuario activo.";
            header('Location: ../../index.php');
            exit();
        }
    }

    // Actualizar los datos en la tabla usuarios
    $sql = "UPDATE usuarios
            SET firt_Name = '$nuevoNombre',
                last_Name = '$nuevoApellido',
                phone = '$nuevoTelefono'
            WHERE ID_Usuario = $idUsuario";

    if (mysqli_query($conexion, $sql)) {
        $_SESSION['mensaje'] = "Datos actualizados correctamente.";
        header('Location: ../../index.php');
        exit();
    } else {
        $_SESSION['mensaje'] = "Error al actualizar datos.";
        header('Location: ../../index.php');
    }
} else {
    header('Location: ../../index.php');
}
?>
