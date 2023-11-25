<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
 
</head>
<body>
<div class="usuario">
    <h1>compras page</h1>
    <form action="factura.php" method="post" class="styled-form">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required class="box" placeholder="Ingresa tu nombre"><br><br>
    
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required class="box" placeholder="Ingresa tu dirección"><br><br>
    
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required class="box" placeholder="Ingresa tu teléfono"><br><br>
    
    <input type="submit" value="Pagar" class="btn">
</form>
</div>
</body>
</html>