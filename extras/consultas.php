<?php

function obtenerPizzas()
{
  // Conexión con la base de datos
  include 'conexion.php';

  // Consulta SQL
  $sql = "SELECT *
    FROM pizzas;";

  // Ejecución de la consulta
  $result = $mysqli->query($sql);

  // Retorno de los resultados
  return $result;
}

function registrarFactura($nombre, $direccion, $telefono, $idpizza, $precio)
{
  include 'conexion.php';

  $string = implode(", ", $idpizza);

  $sql = "INSERT INTO facturas (nombrecliente, direccion, telefono, idpizza, precio) 
VALUES ('$nombre', '$direccion', '$telefono', '[$string]', $total)";

$mysqli->query($sql);
}
