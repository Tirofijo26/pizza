<?php
  session_start();
  if(isset($_SESSION['user'])){
    header('Location: index.php');
  }
  if (isset($_SESSION['mensaje'])) {
    //sleep(2);
    echo '<div id="mensaje-alert" class="alert alert-info text-center mx-auto" style="width: 50%;">' . $_SESSION['mensaje'] . '</div>';

    // Limpiar la variable de sesión para que el mensaje no persista en futuras solicitudes
    unset($_SESSION['mensaje']);
}

?>

<script>
// Espera 3 segundos y luego oculta el mensaje
setTimeout(function() {
    document.getElementById('mensaje-alert').style.display = 'none';
}, 2000);
</script>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include 'extras/head.php'; ?>

<body>

    <div class="login-box">
        <p>Bienvenido A BarberShop</p>
        <form action="extras/validarSesion.php" method="POST">
            <div class="user-box">
                <input required name="user" type="text">
                <label>Usuario</label>
            </div>
            <div class="user-box">
                <input required name="pass" type="password">
                <label>Contraseña</label>
            </div>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Iniciar Sesion

            </button>
        </form>
    </div>


    </main><!-- End #main -->
    <?php include 'extras/footerlogin.php'?>
</body>

</html>