<?php

    $db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name ="barbershop";

	$conexion = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
	if(mysqli_connect_errno()){
		echo "Error al conectar";
		exit();
	}
	mysqli_select_db($conexion,$db_name)or die("No existe database!!");
	mysqli_set_charset($conexion,"utf8");



?>