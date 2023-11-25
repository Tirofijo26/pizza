<?php
    session_start();
    if(isset($_SESSION['user'])){
        $nameUser = $_SESSION['user'];
        include "extras/Conexion/cosultar.php";
        obtenerListaUsuarios();
        $cont=$_SESSION["cantUsuarios"];
        $contInactivos=$_SESSION["cantUsuariosInactivos"];

        ganancias();
        $datos_usuario=$_SESSION['datos_ganancias'];
        //var_dump($datos_usuario);

        acomuladoDinero();
        $datos_ganancias = $_SESSION['totalacomulado'];
        //var_dump($datos_ganancias);	
        
        if (isset($_SESSION['mensaje'])) {
            //sleep(2);
            echo '<div id="mensaje-alert" class="alert alert-info text-center mx-auto" style="width: 50%;">' . $_SESSION['mensaje'] . '</div>';
            //var_dump($_SESSION['mensaje']);
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
<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 20:31:50 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Inicio| BarberShop</title>
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
                                <h4 class="page-title">Inicio</h4>
                            </div>
                        </div>
                    </div>

                    <!--Datos Estadisticos-->
                    <div class="row g-0 mb-3">

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="uil uil-money-withdrawal text-muted font-24"></i>
                                    <h3><span><?php echo $datos_usuario['ganancia_negocio']; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Total Ganancias</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="uil-coins text-muted font-24"></i>
                                    <h3><span><?php echo $datos_ganancias['total_precios_servicio']; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Total Dinero</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="uil uil-money-insert text-muted font-24"></i>
                                    <h3><span><?php echo $datos_usuario['pago_iva']; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Pago IVA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="uil uil-chart-down text-muted font-24"></i>
                                    <h3><span><?php echo $datos_usuario['pago_usuario']; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Total Pago Trabajadores</p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!--tabla de usuarios-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Administrar Empleados</h4>
                                </div>


                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-5">
                                            <a href="add-usuarios.php" class="btn btn-success mb-2"><i
                                                    class="mdi mdi-plus-circle me-2"></i> Agregar Empleados</a>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="text-sm-end">
                                                <label class="btn btn-light mb-2">Total Trabajadores
                                                    <?php echo $cont; ?></label>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                                            id="products-datatable">
                                            <thead>
                                                <tr>

                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Telefono</th>
                                                    <th style="width: 120px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (isset($_SESSION['listUser'])) {
                                                    $user = $_SESSION['listUser'];
                                                    //var_dump($user);

                                                    foreach ($user as $usuario) {
                                                        if ($usuario['estado_usuario'] == "Activo") {
                                                        

                                                ?>
                                                <tr>

                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="usuarios-detalles.php?id=<?php echo $usuario['ID_Usuario']; ?>"
                                                            class="text-body fw-semibold"><?php echo $usuario['firt_Name']; ?></a>
                                                    </td>
                                                    <td>
                                                        <?php echo $usuario['last_Name']; ?>

                                                    </td>
                                                    <td>

                                                        <?php echo $usuario['phone']; ?>
                                                    <td>
                                                        <a href="registro_factura.php?id=<?php echo $usuario['ID_Usuario']; ?>"
                                                            class="action-icon"> <i class="uil-receipt-alt"></i></a>

                                                        <a href="update-usuarios.php?id=<?php echo $usuario['ID_Usuario']; ?>"
                                                            class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>

                                                        <a href="extras/Conexion/eliminar.php?id=<?php echo $usuario['ID_Usuario']; ?>"
                                                            class="action-icon"> <i class="mdi mdi-delete"></i></a>


                                                    </td>
                                                </tr>
                                                <?php } 
                                                    }
                                                }?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-5">
                                            <label class="btn btn-light mb-2">Trabajadores Inactivos
                                                <?php echo $contInactivos; ?></label>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                                            id="products-datatable">
                                            <thead>
                                                <tr>

                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Telefono</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (isset($_SESSION['listUser'])) {
                                                    $user = $_SESSION['listUser'];
                                                    //var_dump($user);

                                                    foreach ($user as $usuario) {
                                                        if ($usuario['estado_usuario'] == "Inactivo") {
                                                        

                                                ?>
                                                <tr>

                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="usuarios-detalles.php?id=<?php echo $usuario['ID_Usuario']; ?>"
                                                            class="text-body fw-semibold"><?php echo $usuario['firt_Name']; ?></a>
                                                    </td>
                                                    <td>
                                                        <?php echo $usuario['last_Name']; ?>

                                                    </td>
                                                    <td>

                                                        <?php echo $usuario['phone']; ?>
                                                </tr>
                                                <?php } 
                                                    }
                                                }?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

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