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

    <!-- Sección de cuenta de usuario comienza aquí -->
    <div class="user-account">
        <section class="container">
            <div id="close-account"><span>Cerrar</span></div>
            <div class="user">
                <p><span>No has iniciado sesión.</span></p>
            </div>
            <div class="display-orders">
                <p>Pizza 01 <span>( $3/ - x 2 )</span></p>
                <p>Pizza 02 <span>( $2/ - x 1 )</span></p>
                <p>Pizza 03 <span>( $4/ - x 4 )</span></p>
                <p>Pizza 04 <span>( $2/ - x 1 )</span></p>
            </div>
            <div class="flex">
                <form action="" method="post">
                    <h3>Iniciar sesión</h3>
                    <input type="email" name="email" required class="box" placeholder="Ingresa tu correo electrónico"
                        maxlength="50">
                    <input type="password" name="pass" required class="box" placeholder="Ingresa tu contraseña"
                        maxlength="20">
                    <input type="submit" value="Iniciar sesión" name="login" class="btn">
                </form>
                <form action="" method="post">
                    <h3>Registrarse</h3>
                    <input type="text" name="name" required class="box" placeholder="Ingresa tu nombre" maxlength="20">
                    <input type="email" name="email" required class="box" placeholder="Ingresa tu correo electrónico"
                        maxlength="50">
                    <input type="password" name="pass" required class="box" placeholder="Ingresa tu contraseña"
                        maxlength="20">
                    <input type="password" name="cpass" required class="box" placeholder="Confirma tu contraseña"
                        maxlength="20">
                    <input type="submit" value="Registrarse" name="register" class="btn">
                </form>
            </div>
        </section>
    </div>
    <!-- Sección de cuenta de usuario termina aquí -->

    <!-- Sección de pedidos comienza aquí -->
    <div class="my-orders">
        <section class="container">
            <div id="close-orders"><span>Cerrar</span></div>
            <h3 class="title">Mis pedidos</h3>
            <div class="box">
                <p>Realizado el: <span>08/10/2022</span></p>
                <p>Nombre: <span>Jamshid Askarov</span></p>
                <p>Número: <span>99894-661-16-34</span></p>
                <p>Dirección: <span>30, 5, 6kv, Distrito Yunusobod, Ciudad de Taskent, Uzb</span></p>
                <p>Método de pago: <span>Efectivo a la entrega</span></p>
                <p>Tus pedidos: <span>Pizza 01 $3/- x 2, Pizza 03 $2/- x 1, Pizza 06 $4/- x 4</span></p>
                <p>Precio total: <span>$24/-</span></p>
                <p>Estado del pago: <span style="color: var(--red);">Pendiente</span></p>
            </div>
            <div class="box">
                <p>Realizado el: <span>08/10/2022</span></p>
                <p>Nombre: <span>Jamshid Askarov</span></p>
                <p>Número: <span>99894-661-16-34</span></p>
                <p>Dirección: <span>30, 5, 6kv, Distrito Yunusobod, Ciudad de Taskent, Uzb</span></p>
                <p>Método de pago: <span>Efectivo a la entrega</span></p>
                <p>Tus pedidos: <span>Pizza 01 $3/- x 2, Pizza 03 $2/- x 1, Pizza 06 $4/- x 4</span></p>
                <p>Precio total: <span>$24/-</span></p>
                <p>Estado del pago: <span style="color: var(--red);">Pendiente</span></p>
            </div>
        </section>
    </div>
    <!-- Sección de pedidos termina aquí -->

    <!-- Sección de carrito de compras comienza aquí -->
    <div class="shopping-cart">
        <section class="container">
            <div id="close-cart"><span>Cerrar</span></div>
            <div class="box">
                <a href="" class="fas fa-times"></a>
                <img src="/images/pizza1.jpeg" alt="01">
                <div class="content">
                    <p>Pizza-1 <span>( $3/- x 2 )</span></p>
                    <form action="" method="post">
                        <input type="number" name="qty" class="qty" min="1" max="10" value="2">
                        <button type="submit" class="fas fa-edit" name="update_qty"></button>
                    </form>
                </div>
            </div>
            <div class="box">
                <a href="" class="fas fa-times"></a>
                <img src="/images/pizza2.jpeg" alt="03">
                <div class="content">
                    <p>Pizza-3 <span>( $2/- x 1 )</span></p>
                    <form action="" method="post">
                        <input type="number" name="qty" class="qty" min="1" max="10" value="1">
                        <button type="submit" class="fas fa-edit" name="update_qty"></button>
                    </form>
                </div>
            </div>
            <div class "box">
                <a href="" class="fas fa-times"></a>
                <img src="/images/pizza.jpeg" alt="06">
                <div class="content">
                    <p>Pizza-6 <span>( $4/- x 4 )</span></p>
                    <form action="" method="post">
                        <input type="number" name="qty" class="qty" min="1" max="10" value="4">
                        <button type="submit" class="fas fa-edit" name="update_qty"></button>
                    </form>
                </div>
            </div>
            <a href="" class="btn">Ordenar ahora</a>
        </section>
    </div>
    <!-- Sección de carrito de compras termina aquí -->

    <!-- Sección de inicio comienza aquí -->
    <div class="home-bg">
        <section class="home container" id="home">
            <div class="slide-container">
                <div class="slide active">

                    <div class="content">
                        <h3>Pizza de Pepperoni Casera</h3>
                        <div class="fas fa-angle-left" onclick="prev()"></div>
                        <div class="fas fa-angle-right" onclick="next()"></div>
                    </div>
                </div>
                <div class="slide">

                    <div class "content">
                        <h3>Pizza con Champiñones</h3>
                        <div class="fas fa-angle-left" onclick="prev()"></div>
                        <div class="fas fa-angle-right" onclick="next()"></div>
                    </div>
                </div>
                <div class "slide">

                    <!-- <div class="content">
                        <h3>Mascarpone y Champiñones</h3>
                        <div class="fas fa-angle-left" onclick="prev()"></div>
                        <div class="fas fa-angle-right" onclick="next()"></div>
                    </div> -->
                </div>
            </div>
        </section>
    </div>
    <!-- Sección de inicio termina aquí -->

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
    //importante//
    <section class="menu container" id="menu">
        <h1 class="heading">Nuestro menú</h1>
        <div class="box-container">
            <div class="box">
                <div class="price">$<span>2</span>/-</div>
                <div class="name">Pizza 01</div>
                <form action="" method="post">
                    <input type="number" name="qty" min="1" max="20" value="1" class="qty">
                    <input type="submit" name="add_to_btn" value="Agregar al carrito" class="btn">
                </form>
            </div>
            <div class="box">
                <div class="price">$<span>4</span>/-</div>
                <div class="name">Pizza 02</div>
                <form action="" method="post">
                    <input type="number" name="qty" min="1" max="20" value="1" class="qty">
                    <input type="submit" name="add_to_btn" value="Agregar al carrito" class="btn">
                </form>
            </div>
            <div class="box">
                <div class="price">$<span>4</span>/-</div>
                <div class="name">Pizza 03</div>
                <form action="" method="post">
                    <input type="number" name="qty" min="1" max="20" value="1" class="qty">
                    <input type="submit" name="add_to_btn" value="Agregar al carrito" class="btn">
                </form>
            </div>
            
            
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
                    <input type="text" name="flat" required placeholder="Ejemplo: Número de departamento" maxlength="50"
                        class="box">
                </div>
                <div class="inputBox">
                    <span>Tu dirección línea 2:</span>
                    <input type="text" name="street" required placeholder="Ejemplo: Nombre de la calle" maxlength="50"
                        class="box">
                </div>
                <div class="inputBox">
                    <span>Tu dirección línea 3:</span>
                    <input type="text" name="city" required placeholder="Ejemplo: Nombre de la ciudad" maxlength="50"
                        class="box">
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