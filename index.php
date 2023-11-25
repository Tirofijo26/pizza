<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form class="container" method="post" action="index1.php">
        <div class="card">
            <a class="login">Iniciar sesion</a>
            <div class="inputBox">
                <input type="text" required="required">
                <span class="user">Nombre</span>
            </div>

            <div class="inputBox">
                <input type="password" required="required">
                <span>Contraseña</span>
            </div>

            <button class="enter">Enter</button>

        </div>
    </form>

</body>

</html>