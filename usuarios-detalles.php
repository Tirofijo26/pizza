<?php
    session_start();
    if(isset($_SESSION['user'])){//valido si existe una sesion
        $nameUser = $_SESSION['user'];
        include 'extras/Conexion/cosultar.php';
        obtenerInfoUsuarioPorID($_GET['id']);
        $datosUsuario = $_SESSION['datosUsuario'];
        //var_dump($datosUsuario);
        consultaPagoAcomuladoUsuarios($_GET['id']);
        $datos_usuario_ACOMULADO=$_SESSION['datos_usuario_ACOMULADO'];
        //var_dump($datos_usuario_ACOMULADO);

        
    }else{

        header('Location: login.php');      
    }

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Usuario | BarberShop</title>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Detalles Usuario</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Product image -->
                                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid"
                                                    style="max-width: 280px;" alt="Product-img" />
                                            </a>

                                        </div> <!-- end col -->
                                        <div class="col-lg-7">
                                            <!-- Product title -->
                                            <div class="mt-3">
                                                <h2><span
                                                        class="badge badge-success-lighten"><?php echo $datosUsuario['firt_Name']." "; echo $datosUsuario['last_Name'] ?></span>
                                                </h2>
                                                <br>
                                            </div>
                                            <h6 class="font-14">Numero de Registro:</h6>
                                            <?php echo $datosUsuario['ID_Usuario']; ?>
                                            <br>
                                            <br>
                                            <h6 class="font-14">Telefono:</h6>
                                            <p class="mb-1"> <?php echo $datosUsuario['phone']; ?>
                                            </p>



                                            <!-- Product description -->
                                        </div> <!-- end col -->

                                        <div class="col-lg-5">
                                            <h6 class="font-14">Numero de Turno:</h6>
                                            <p class="mb-1">
                                                <?php echo $datosUsuario['ID_Turno']; ?></p>
                                            <div class="mt-4">
                                                <h6 class="font-14">Fecha Turno:</h6>
                                                <p><?php echo $datosUsuario['fecha_turnos']; ?></p>
                                            </div>
                                            <div class="mt-4">
                                                <h6 class="font-14">Cantidad de Turnos:</h6>
                                                <p><?php echo $datosUsuario['cantidad_turnos_usuario']; ?></p>
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="font-14">Tipo de Servicio:</h6>
                                                <p><?php echo $datosUsuario['tipo_servicio']; ?></p>
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="font-14">Precio De servicio:</h6>
                                                <p><?php echo $datosUsuario['precio_servicio']; ?></p>
                                            </div>

                                            <!-- Product information -->
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">Numero de Pago:</h6>
                                                        <p class="text-sm lh-150">
                                                            <?php echo $datosUsuario['ID_Pago']; ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="font-14">Ganancia:</h6>
                                                <p><?php echo $datos_usuario_ACOMULADO['total_pagos_usuario']; ?></p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


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