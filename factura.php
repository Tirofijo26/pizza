<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Facturacion</title>
</head>
<div class="encabezado"></div>
<br>
<h2>
  <center> FACTURA: </center>
</h2><br><br>
</div>

<body>
  <h3>
    <center>
      <?php

      $Peperoni = 0;
      $Queso = 0;
      $Tomate = 0;
      $Champiñones = 0;
      $Jamon = 0;
      $Especial = 0;

      if (!empty($_POST['Peperoni'])) {
        $Peperoni = $_POST['Peperoni'];
      }
      if (!empty($_POST['Queso'])) {
        $Queso = $_POST['Queso'];
      }
      if (!empty($_POST['Tomate'])) {
        $Tomate = $_POST['Tomate'];
      }
      if (!empty($_POST['Champiñones'])) {
        $Champiñones = $_POST['Champiñones'];
      }
      if (!empty($_POST['Jamon'])) {
        $Jamon = $_POST['Jamon'];
      }
      if (!empty($_POST['Especial'])) {
        $Especial = $_POST['Especial'];
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        echo "$nombre</p>";
        echo "$direccion</p>";
        echo "$telefono</p>";
      }
      $total = 0;

      if ($Peperoni > 0) {
        $resultado = $Peperoni * 7000;
        echo "Pizzas peperoni: $resultado </p>";
        $total += $resultado;
      }

      if ($Queso > 0) {
        $resultado = $Queso * 7500;
        echo "Pizzas Queso: $resultado </p>";
        $total += $resultado;
      }

      if ($Tomate > 0) {
        $resultado = $Tomate * 8000;
        echo "Pizzas Tomate: $resultado</p> ";
        $total += $resultado;
      }

      if ($Champiñones > 0) {
        $resultado = $Champiñones * 6000;
        echo "Pizzas Champiñones: $resultado </p> ";
        $total += $resultado;
      }

      if ($Jamon > 0) {
        $resultado = $Jamon * 5500;
        echo "Pizzas Jamon: $resultado </p>";
        $total += $resultado;
      }

      if ($Especial > 0) {
        $resultado = $Especial * 10000;
        echo "Pizzas Especial: $resultado </p>";
        $total += $resultado;
      }

      echo "Total: " . $total;
      ?>
    </center>
  </h3>
  <form action="index.php" method="post" class="styled-form">
    <input type="submit" value="Regresar" class="btn">
  </form>
</body>

</html>
