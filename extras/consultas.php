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
