<?php
    if (!empty($_POST)){

       
        

        function insertarRegistro(){
            include 'conexion.php';
            session_start();

            if (!empty($_POST)) {
                // Recuperar los datos del formulario
                $fechaTurno = date('Y-m-d', strtotime($_POST['fechaturno']));
                $cantidadTurnos = $_POST['cantidadturnos'];
                $tipoServicio = $_POST['tiposervicio'];
                $idUsuario = $_POST['userid'];

                // Validar que los datos necesarios estén presentes y sean válidos (puedes agregar más validaciones según tus necesidades)

                if (empty($fechaTurno) || empty($cantidadTurnos) || empty($tipoServicio) || empty($idUsuario)) {
                    $_SESSION['mensaje'] = "Error: Todos los campos son obligatorios.";
                    header('Location: ../../index.php');
                    exit();
                }

                // Evitar inyección SQL
                $tipoServicio = mysqli_real_escape_string($conexion, $tipoServicio);

                $datosServicios = array('Corte' => 25000, 'Facial' => 10000, 'Barba' => 10000);

                if (!array_key_exists($tipoServicio, $datosServicios)) {
                    $_SESSION['mensaje'] = "Error: Tipo de servicio no válido.";
                    header('Location: ../../index.php');
                    exit();
                }

                $precioServicio = $datosServicios[$tipoServicio];

                // Insertar en la tabla servicios
                $insertServicio = "INSERT INTO Servicios (tipo_servicio, precio_servicio)
                                VALUES ('$tipoServicio', $precioServicio)";

                if (!mysqli_query($conexion, $insertServicio)) {
                    $_SESSION['mensaje'] = "Error al insertar el servicio: " . mysqli_error($conexion);
                    header('Location: ../../index.php');
                    exit();
                }

                // Obtener el ID del último turno insertado
                $idServicio = mysqli_insert_id($conexion);

                // Calcular el costo total del servicio sin IVA
                $costoTotalSinIVA = $cantidadTurnos * $precioServicio;

                // Calcular el monto del IVA (18%)
                $iva = $costoTotalSinIVA * 0.18;

                // Calcular el costo total del servicio con IVA
                $costoTotalConIVA = $costoTotalSinIVA + $iva;

                // Calcular los porcentajes de pagos
                $porcentajeBarberia = 0.4;
                $porcentajeBarbero = 0.6;

                // Calcular los pagos antes de impuestos
                $pagoBarberiaAntesImpuestos = $costoTotalConIVA * $porcentajeBarberia;
                $pagoBarberoAntesImpuestos = $costoTotalConIVA * $porcentajeBarbero;

                // Insertar en la tabla turnos
                $insertTurno = "INSERT INTO Turnos (id_usuario, id_servicio, fecha_turnos, cantidad_turnos)
                                VALUES ($idUsuario, $idServicio, '$fechaTurno', $cantidadTurnos)";

                if (!mysqli_query($conexion, $insertTurno)) {
                    $_SESSION['mensaje'] = "Error al insertar el turno: " . mysqli_error($conexion);
                    header('Location: ../../index.php');
                    exit();
                }

                // Obtener el ID del último turno insertado
                $idTurno = mysqli_insert_id($conexion);

                $gananciaNegocio = ($costoTotalConIVA - $pagoBarberoAntesImpuestos);
                $gananciaEmpleado = $pagoBarberoAntesImpuestos;

                // Insertar en la tabla pagos
                $insertPagos = "INSERT INTO Pagos (id_usuario, pago_usuario, ganancia_negocio, pago_iva)
                                VALUES ($idUsuario, $gananciaEmpleado, $gananciaNegocio, $iva)";

                if (!mysqli_query($conexion, $insertPagos)) {
                    $_SESSION['mensaje'] = "Error al insertar el pago: " . mysqli_error($conexion);
                    header('Location: ../../index.php');
                    exit();
                }

                // Puedes realizar más acciones o redireccionar a otra página si es necesario
                $_SESSION['mensaje'] = "Nueva factura creada con éxito.";
                header('Location: ../../index.php');
                
                exit();
            } else {
                $_SESSION['mensaje'] = "Error: Datos del formulario vacíos.";
                header('Location: ../../index.php');
                exit();
            }
        }

        function RegistrarUsuarios() {


            include 'conexion.php';
            session_start();

            // Datos del nuevo usuario
            $nombre = $_POST["username"];
            $apellido = $_POST["lastname"];
            $telefono = $_POST["phone"];
            $estado = 'Activo';

            // Consulta para verificar si el teléfono ya está registrado
            $consultaExistencia = "SELECT COUNT(*) as total FROM usuarios WHERE phone = '$telefono'";
            $resultadoExistencia = mysqli_query($conexion, $consultaExistencia);

            if ($resultadoExistencia) {
                $filaExistencia = mysqli_fetch_assoc($resultadoExistencia);

                if ($filaExistencia['total'] > 0) {
                    // El teléfono ya está registrado, puedes mostrar un mensaje de error o redirigir a otra página
                    $_SESSION['mensaje'] = "Error: El teléfono ya está registrado.";
                    header('Location: ../../add-usuarios.php');
                } else {
                    // El teléfono no está registrado, proceder con la inserción
                    $consultaUsuario = "INSERT INTO usuarios (firt_Name, last_Name, phone, estado_usuario) VALUES ('$nombre', '$apellido', '$telefono','$estado')";

                    $resultadoUsuario = mysqli_query($conexion, $consultaUsuario);

                    // Verificar si la inserción del usuario fue exitosa
                    if ($resultadoUsuario) {
                        $_SESSION['mensaje'] = "Nuevo usuario creado exitosamente.";
                        header('Location: ../../add-usuarios.php');
                        exit();
                    } else {
                        echo "Error al crear el usuario: " . mysqli_error($conexion);
                    }
                }
            } else {
                echo "Error al verificar la existencia del teléfono: " . mysqli_error($conexion);
            }

        
        }
        //var_dump(!empty($_POST['userid']));
        if (!empty($_POST['userid'])){
            insertarRegistro();
        }else{
            RegistrarUsuarios();
        }

        
    }else{
        header('Location: ../../add-usuarios.php');
    }
?>