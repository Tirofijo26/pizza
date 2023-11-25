<?php
    session_start();
    if(isset($_SESSION['user'])){//valido si existe una sesion
        $nameUser = $_SESSION['user'];
        //$datosUser = $_SESSION['updateuser'];
        include 'extras/Conexion/cosultar.php';
        obtenerInfoUsuarioPorID($_GET['id']);
        $datosUsuario = $_SESSION['datosUsuario'];
        //var_dump($datosUsuario);
        
        
    }else{
        
        header('Location: login.php');      
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

<head>
    <meta charset="utf-8" />
    <title>Actualizar Trabajador | BarberShop</title>
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
                                <h4 class="page-title">Trabajadores</h4>
                            </div>
                        </div>
                    </div>

                    <!-- formulario -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Actualizar Trabajador</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form method="POST" action="extras/Conexion/actualizar.php">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Nombres</label>
                                                    <input type="text" id="simpleinput" class="form-control"
                                                        name="user-name" value="<?php echo $datosUsuario['firt_Name']; ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Apellidos</label>
                                                    <input type="text" id="simpleinput" class="form-control"
                                                        name="user-last-name"
                                                        value="<?php echo $datosUsuario['last_Name']; ?>">
                                                </div>

                                                
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Teléfono</label>
                                                    <input type="phone" id="simpleinput" class="form-control"
                                                        name="user-phone" value="<?php echo $datosUsuario['phone']; ?>">
                                                </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">


                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">ID Usuario</label>
                                                <input type="phone" id="simpleinput" class="form-control"
                                                    name="user-id" value="<?php echo $datosUsuario['ID_Usuario']; ?>" readonly>
                                            </div>



                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary" name="submit">Actualizar Datos</button>

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