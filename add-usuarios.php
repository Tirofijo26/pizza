<?php
    session_start();
    if(isset($_SESSION['user'])){//valido si existe una sesion
        $nameUser = $_SESSION['user'];

        if (isset($_SESSION['mensaje'])) {
            //sleep(2);
            echo '<div id="mensaje-alert" class="alert alert-info text-center mx-auto" style="width: 50%;">' . $_SESSION['mensaje'] . '</div>';
    
            // Limpiar la variable de sesión para que el mensaje no persista en futuras solicitudes
            unset($_SESSION['mensaje']);
            
        }
    }else{
        
        header('Location: login.php');      
    }

?>
<!-- Agrega este script JavaScript al final del cuerpo de tu HTML -->
<script>
// Espera 3 segundos y luego oculta el mensaje
setTimeout(function() {
    document.getElementById('mensaje-alert').style.display = 'none';
}, 3000);
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Añadir usuarios | BarberShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/barbeross.png" />

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css" />

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" />

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        <?php
        include("extras/header.php");
        ?>
        <!-- ========== Topbar End ========== -->

        <?php
        include("extras/sidebar.php");
        ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- titulo pagina-->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Usuarios</h4>
                            </div>
                        </div>
                    </div>

                    <!-- formulario -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Agregar usuarios</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form method="POST" action="extras/Conexion/insertar.php">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Nombre</label>
                                                    <input type="text" id="simpleinput" class="form-control"
                                                        name="username" require>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Apellido</label>
                                                    <input type="text" id="simpleinput" class="form-control"
                                                        name="lastname" require>
                                                </div>



                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Teléfono</label>
                                                <input type="phone" id="simpleinput" class="form-control" name="phone"
                                                    require>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" name="submit">Enviar</button>

                                    </div>
                                    </form>

                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <?php
            include("extras/footer.php");
            ?>
        <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <?php
    include("extras/js.php");
    ?>

</body>

</html>