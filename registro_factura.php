<?php
    session_start();
    if(isset($_SESSION['user'])){//valido si existe una sesion
        $nameUser = $_SESSION['user'];
        
        
    }else{
        
        header('Location: login.php');      
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Registro Datos | BarberShop</title>
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

                                <h4 class="page-title">Factura</h4>
                            </div>
                        </div>
                    </div>

                    <!-- formulario -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Registrar Factura</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form method="POST" action="extras/Conexion/insertar.php">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Fecha del Turno</label>
                                                    <input type="date" id="simpleinput" class="form-control"
                                                        name="fechaturno">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Cantidad de
                                                        turnos</label>
                                                    <input type="number" id="simpleinput" class="form-control"
                                                        name="cantidadturnos" min="1" steep="1">
                                                </div>



                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Tipo de Servicio</label>
                                                    <select class="form-select" id="example-select" name="tiposervicio">

                                                        <option value="Corte">Corte de Cabello</option>
                                                        <option value="Facial">Limpieza Facial</option>
                                                        <option value="Barba">Corte de Barba</option>

                                                    </select>
                                                </div>


                                        </div> <!-- end col -->

                                        <div class="col-lg-6">


                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">ID Usuario</label>
                                                <input type="phone" id="simpleinput" class="form-control" name="userid"
                                                    value="<?php echo $_GET['id']; ?>" readonly>
                                            </div>





                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary" name="submit">Registrar
                                                Factura</button>

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