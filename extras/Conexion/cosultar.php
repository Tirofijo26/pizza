<?php

// Función para obtener la lista de usuarios con la cantidad de turnos y ganancias
function obtenerListaUsuarios() {
    include 'conexion.php';

    $sql = "
        SELECT
            U.ID_Usuario,
            U.firt_Name,
            U.last_Name,
            U.phone,
            U.estado_usuario,
            T.cantidad_turnos AS cantidad_turnos_usuario,
            SUM(P.pago_usuario) AS total_ganancias
        FROM
            usuarios U
        LEFT JOIN
            turnos T ON U.ID_Usuario = T.id_usuario
        LEFT JOIN
            pagos P ON U.ID_Usuario = P.id_usuario
        GROUP BY
            U.ID_Usuario, U.firt_Name, U.last_Name;
    ";

    $resultado = mysqli_query($conexion, $sql);

    $datos_fetch_assoc = array();
    $cont = 0;
    $contInactivos = 0;

    while ($fila = $resultado->fetch_assoc()) {
        $datos_fetch_assoc[] = $fila;
        
        
        // Aquí se corrige la condición
        if ($fila['estado_usuario'] == "Inactivo") {
            $contInactivos++;
        }else{
            $cont++;
        }
    }

    $_SESSION['listUser'] = $datos_fetch_assoc;
    // var_dump($datos_fetch_assoc); // Puedes descomentar esto para ver todo el array
    $_SESSION["cantUsuarios"] = $cont;
    $_SESSION["cantUsuariosInactivos"] = $contInactivos;

}

function consultaPagoAcomuladoUsuarios($idUsuario) {
    include 'conexion.php';

    $sql = "
    
    SELECT
    id_usuario,
    SUM(pago_usuario) AS total_pagos_usuario
    FROM
        pagos
    WHERE
        id_usuario = $idUsuario;     
    
    ";

    $resultado = mysqli_query($conexion, $sql);
    while ($fila = $resultado->fetch_assoc()) {
        $datos_usuario_ACOMULADO[] = $fila;
    }
    $_SESSION['datos_usuario_ACOMULADO'] = $datos_usuario_ACOMULADO[0];

    //var_dump($datos_usuario_ACOMULADO);

}

// Función para obtener información detallada de un usuario por su ID
function obtenerInfoUsuarioPorID($idUsuario) {
    include 'conexion.php';

    $sql = "
    SELECT
    U.ID_Usuario,
    U.firt_Name,
    U.last_Name,
    U.phone,
    T.ID_Turno,
    T.fecha_turnos,
    T.cantidad_turnos AS cantidad_turnos_usuario,
    S.tipo_servicio,
    S.precio_servicio,
    P.ID_Pago,
    P.pago_usuario
    FROM
        Usuarios U
    LEFT JOIN
        Turnos T ON U.ID_Usuario = T.id_usuario
    LEFT JOIN
        Servicios S ON T.id_servicio = S.ID_Servicio
    LEFT JOIN
        Pagos P ON U.ID_Usuario = P.id_usuario
    WHERE
        U.ID_Usuario = $idUsuario
    ORDER BY T.fecha_turnos DESC, P.ID_Pago DESC, S.ID_Servicio DESC
    LIMIT 1;

    ";

    $resultado = mysqli_query($conexion, $sql);

    $datos_usuario = array();

    while ($fila = $resultado->fetch_assoc()) {
        $datos_usuario[] = $fila;
    }
    if (count($datos_usuario) == 0) {
        //echo "No existe ese usuario";
        $_SESSION['datosUsuario'] = $datos_usuario=array("ID_Usuario"=> "Sin Datos" ,"firt_Name"=> "No existe" ,"last_Name"=>"ese usuario" ,"phone"=>  "Sin Datos", "ID_Turno"=> 'Sin Datos', "fecha_turnos"=> 'Sin Datos' ,"cantidad_turnos_usuario"=> 'Sin Datos' ,"tipo_servicio"=> 'Sin Datos' ,"precio_servicio"=> 'Sin Datos', "ID_Pago"=> 'Sin Datos', "pago_usuario"=> 'Sin Datos' );
    }else {

        $_SESSION['datosUsuario'] = $datos_usuario[0];

    }
    
}

function ganancias() {
    include 'conexion.php';

    $sql = "

    SELECT
    SUM(ganancia_negocio) AS ganancia_negocio,
    SUM(pago_iva) AS pago_iva,
    SUM(pago_usuario) AS pago_usuario
    FROM Pagos;
    ";

    $resultado = mysqli_query($conexion, $sql);

    $datos_ganancias = array();

    while ($fila = $resultado->fetch_assoc()) {
        $datos_ganancias[] = $fila;
    }
    //var_dump($datos_ganancias);
    if ($datos_ganancias[0]['ganancia_negocio']==NULL) {
        $_SESSION['datos_ganancias'] = $datos_ganancias = array('ganancia_negocio'=>0,'pago_iva'=>0,'pago_usuario'=>0);

    }else{
        
        //var_dump($datos_ganancias);
        $_SESSION['datos_ganancias'] = $datos_ganancias[0];
    }



}

function acomuladoDinero(){
    include 'conexion.php';

    $sql = "
    SELECT SUM(precio_servicio) AS total_precios_servicio FROM Servicios;
    ";
    $resultado = mysqli_query($conexion, $sql);
    while ($fila = $resultado->fetch_assoc()) {
        $datos_ganancias[] = $fila;
    }
    if ($datos_ganancias[0]['total_precios_servicio']==NULL) {
    $_SESSION['totalacomulado'] = $datos_ganancias[0] = array('total_precios_servicio'=>0);
    }else{
        $_SESSION['totalacomulado'] = $datos_ganancias[0];

    }
}

?>
