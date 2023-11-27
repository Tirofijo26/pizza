<?php

$Peperoni = $_POST['Peperoni'];
$Queso = $_POST['Queso'];
$Tomate = $_POST['Tomate'];
$Champiñones = $_POST['Champiñones'];
$Jamon = $_POST['Jamon'];
$Especial = $_POST['Especial'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">

    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4 ">
            <div>
                <div style="font-size: 20px;">


                    <div class="card p-3">
                        <form action="factura.php" method="post" class="styled-form">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required class="box"
                                placeholder="Ingresa tu nombre"><br><br>

                            <label for="direccion">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" required class="box"
                                placeholder="Ingresa tu dirección"><br><br>

                            <label for="telefono">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" required class="box"
                                placeholder="Ingresa tu teléfono"><br><br>



                            <?php

                            echo "\n";
                            if ($Peperoni > 0) {
                                $Peperoni;
                                echo "Peperoni ";
                                echo "<input type='number' name='Peperoni' min='0' max='20' value='{$Peperoni}' class='qty'>";
                            }
                            echo "\n";
                            if ($Queso > 0) {
                                $Queso;
                                echo "Queso ";
                                echo "<input type='number' name='Queso' min='0' max='20' value='{$Queso}' class='qty'>";
                            }
                            echo "\n";

                            if ($Tomate > 0) {
                                $Tomate;
                                echo "Tomate ";
                                echo "<input type='number' name='Tomate' min='0' max='20' value='{$Tomate}' class='qty'>";
                            }
                            echo "\n";
                            if ($Champiñones > 0) {
                                $Champiñones;
                                echo "Champiñones   ";
                                echo "<input type='number' name='Champiñones' min='0' max='20' value='{$Champiñones}' class='qty'>";
                            }
                            echo "\n";
                            if ($Jamon > 0) {
                                $Jamon;
                                echo "Jamon ";
                                echo "<input type='number' name='Jamon' min='0' max='20' value='{$Jamon}' class='qty'>";
                            }
                            echo "\n";
                            if ($Especial > 0) {
                                $Especial;
                                echo "Especial ";
                                echo "<input type='number' name='Especial' min='0' max='20' value='{$Especial}' class='qty'>";
                            }
                            ?>
                    </div>
                    <input type="submit" value="Pagar" class="btn">
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>