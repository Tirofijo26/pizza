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
  echo "Pizza peperoni " . $resultado . "\n";  
  $total += $resultado;
}

if ($Queso > 0) {
  $resultado = $Queso * 7500; 
  echo "Pizza Queso " . $resultado . "\n";
  $total += $resultado;   
}

if ($Tomate > 0) {
  $resultado = $Tomate * 8000;
  echo "Pizza Tomate " . $resultado . "\n";
  $total += $resultado;
}

if ($Champiñones > 0) {
  $resultado = $Champiñones * 6000;
  echo "Pizza Champiñones " . $resultado . "\n";
  $total += $resultado;
}

if ($Jamon > 0) {
  $resultado = $Jamon * 5500;
  echo "Pizza Jamon " . $resultado . "\n";
  $total += $resultado;
}

if ($Especial > 0) {
  $resultado = $Especial * 10000;
  echo "Pizza Especial " . $resultado . "\n";
  $total += $resultado; 
}

echo "Total: " . $total;