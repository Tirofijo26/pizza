<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Dirección: $direccion</p>";
            echo "<p>Teléfono: $telefono</p>";
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
        ?>