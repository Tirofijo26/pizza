<?php
include './extras/conexion.php';
include './extras/consultas.php';

$pizzas = obtenerPizzas();





?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Pizza en Línea</title>

    <!-- Enlace a la fuente de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Enlace al archivo CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Sección de encabezado comienza aquí -->
    <header class="header">
        <section class="container flex">
            <a href="#home" class="logo">Pizza</a>
            <nav class="navbar">
                <a href="#home">Inicio</a>
                <a href="#about">Acerca de nosotros</a>
                <a href="#menu">Menú</a>
                <a href="#order">Ordenar</a>
                <a href="#faq">Preguntas frecuentes</a>
            </nav>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="order-btn" class="fas fa-box"></div>

                <a href="compras.php">
                    <div id="cart-btn" class="fas fa-shopping-cart">
                        <span>(1)</span>
                    </div>
                </a>

            </div>
        </section>
    </header>
    <!-- Sección de encabezado termina aquí -->

    <!-- Sección "Acerca de nosotros" comienza aquí -->
    <section class="about container" id="about">
        <h1 class="heading">Acerca de nosotros</h1>
        <div class="box-container">
            <div class="box">
                <h3>Hecho con amor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque asperiores, in mollitia
                    soluta magni deleniti dolorum repellendus! Quam, debitis.</p>
                <a href="#menu" class="btn">Nuestro menú</a>
            </div>
            <div class="box">
                <h3>Entrega en 30 minutos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque asperiores, in mollitia
                    soluta magni deleniti dolorum repellendus! Quam, debitis.</p>
                <a href="#menu" class="btn">Nuestro menú</a>
            </div>
            <div class="box">
                <h3>Comparte con amigos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque asperiores, in mollitia
                    soluta magni deleniti dolorum repellendus! Quam, debitis.</p>
                <a href="#menu" class="btn">Nuestro menú</a>
            </div>
        </div>
    </section>
    <!-- Sección "Acerca de nosotros" termina aquí -->

    <!-- Sección de menú comienza aquí -->
    <section class="menu container" id="menu">
        <h1 class="heading">Nuestro menú</h1>
        <div class="box-container">
            <?php
            while ($fila = $pizzas->fetch_array()) {
                // Imprimir los datos de cada fila
                // echo $fila['nombre'] . " - " . $fila['precio'] . "<br>";
            ?>
                <div class="box">
                    <?php
                    echo "<div class='price'>$<span>{$fila['id']}</span>/-</div>";
                    echo "<div class='name'>{$fila['nombre']}</div>";
                    // echo "<img src='{$fila['img']}' alt='{$fila['nombre']}>";
                    echo "<div class='name'><img src='{$fila['img']}' alt='{$fila['nombre']}></div>";
                    echo "<div class='name'>{$fila['precio']}</div>";
                    ?>
                    <!-- <img src="" alt=""> -->
                    <form action="" method="post">
                        <input type="number" name="qty" min="1" max="20" value="1" class="qty">
                        <input type="submit" name="add_to_btn" value="Agregar al carrito" class="btn">
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Sección de menú termina aquí -->

    <!-- Sección de pedidos comienza aquí -->
    <section class="order container" id="order">
        <h1 class="heading">Pedir ahora</h1>
        <form action="" method="post">
            <div class="display-orders">
                <p>Pizza 01 <span>( $3/ - x 2 )</span></p>
                <p>Pizza 02 <span>( $2/ - x 1 )</span></p>
                <p>Pizza 03 <span>( $4/ - x 4 )</span></p>
                <p>Pizza 04 <span>( $2/ - x 1 )</span></p>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>Tu nombre:</span>
                    <input type="text" name="name" required placeholder="Ingresa tu nombre" maxlength="20" class="box">
                </div>
                <div class="inputBox">
                    <span>Tu número:</span>
                    <input type="number" name="number" required placeholder="Ingresa tu número" min="0" class="box">
                </div>
                <div class="inputBox">
                    <span>Método de pago:</span>
                    <select name="method" class="box">
                        <option value="efectivo a la entrega">Efectivo a la entrega</option>
                        <option value="tarjeta de crédito">Tarjeta de crédito</option>
                        <option value="tarjeta Visa">Tarjeta Visa</option>
                        <option value="PayPal">PayPal</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Tu dirección línea 1:</span>
                    <input type="text" name="flat" required placeholder="Ejemplo: Número de departamento" maxlength="50" class="box">
                </div>
                <div class="inputBox">
                    <span>Tu dirección línea 2:</span>
                    <input type="text" name="street" required placeholder="Ejemplo: Nombre de la calle" maxlength="50" class="box">
                </div>
                <div class="inputBox">
                    <span>Tu dirección línea 3:</span>
                    <input type="text" name="city" required placeholder="Ejemplo: Nombre de la ciudad" maxlength="50" class="box">
                </div>
            </div>
            <input type="submit" value="Pedir ahora" class="btn">
        </form>
    </section>
    <!-- Sección de pedidos termina aquí -->

    <!-- Sección de preguntas frecuentes comienza aquí -->
    <section class="faq container" id="faq">
        <h1 class="heading">Preguntas frecuentes</h1>
        <div class="accordion-container">
            <div class="accordion active">
                <div class="accordion-heading">
                    <span>¿Cómo funciona?</span>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti non dolore neque optio enim
                        nisi, doloremque sit sunt iure incidunt!</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-heading">
                    <span>¿Cuánto tiempo se tarda en la entrega?</span>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti non dolore neque optio enim
                        nisi, doloremque sit sunt iure incidunt!</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-heading">
                    <span>¿Cómo hacer un seguimiento del pedido?</span>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti non dolore neque optio enim
                        nisi, doloremque sit sunt iure incidunt!</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-heading">
                    <span>¿Se pueden personalizar las pizzas?</span>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti non dolore neque optio enim
                        nisi, doloremque sit sunt iure incidunt!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de preguntas frecuentes termina aquí -->

    <!-- Sección de pie de página comienza aquí -->
    <section class="footer">
        <div class="container">
            <div class="box-container">
                <div class="box">
                    <h3>Sobre nosotros</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quos, veniam laborum eligendi
                        recusandae laudantium sequi ducimus nesciunt.</p>
                </div>
                <div class="box">
                    <h3>Enlaces rápidos</h3>
                    <a href="#home">Inicio</a>
                    <a href="#about">Acerca de nosotros</a>
                    <a href="#menu">Menú</a>
                    <a href="#order">Ordenar</a>
                    <a href="#faq">Preguntas frecuentes</a>
                </div>
                <div class="box">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123, Calle Principal, Ciudad</p>
                    <p><i class="fas fa-envelope"></i> info@pizzarestaurant.com</p>
                    <p><i class="fas fa-phone"></i> +57 5481487950</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de pie de página termina aquí -->

    <!-- Archivo JavaScript personalizado -->
    <script src="js/script.js"></script>
</body>

</html>