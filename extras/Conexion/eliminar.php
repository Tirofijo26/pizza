<?php
	session_start();
	if(isset($_SESSION['user'])){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];  // Obtén el valor correctamente
			include "conexion.php";
			
			// Consulta para actualizar el estado a 'Inactivo'
			$sql = "UPDATE Usuarios SET estado_usuario = 'Inactivo' WHERE ID_Usuario = ?";
			
			// Prepara la consulta
			$stmt = mysqli_prepare($conexion, $sql);
			
			// Vincula el parámetro
			mysqli_stmt_bind_param($stmt, "i", $id);
			
			// Ejecuta la consulta
			$result = mysqli_stmt_execute($stmt);
			
			if ($result == false) {
				echo "Error!!!";
			} else {
				if (mysqli_affected_rows($conexion) == 0) {
					echo "No existe el índice!";
				} else {
					$_SESSION['mensaje'] = "Usuario Desactivado Correctamente.";
					header('Location: ../../index.php');
					exit();
					
				}
			}
		
			// Cierra el statement
			mysqli_stmt_close($stmt);
		} else {
			header('Location: ../../index.php');
			
			
		}
	}else{
		header('Location: ../../login.php');

	}
	

?>