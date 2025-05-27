<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros WAP - Biblioteca Digital</title>
    <link rel="stylesheet" href="/WAPBOOKS/public/estilos/paleta.css">
    <link rel="stylesheet" href="/WAPBOOKS/public/css/home.css">
</head>

<!-- body y logo y barra de navegacion  -->

<body>
    <header>
    <div class="logo">
        <img src="/WAPBOOKS/public/img/logow.png" alt=""> LIBROS WAP
    </div>
    <nav>
        <a href="#home">Home</a>
        <a href="#products">Productos</a>
        <a href="#categories">Categorías</a>
        <a href="#services">Servicios</a>
        <a href="#contact">Contáctenos</a>
    </nav>
    <input type="text" class="search-bar" placeholder="Buscar...">
    <div class="auth-buttons">
        <a href="/WAPBOOKS/views/usuarios/login.php" class="login-btn">Iniciar Sesión</a>
        <a href="/WAPBOOKS/views/usuarios/register.php" class="register-btn">Registrarse</a>
    </div>
</header>


    <!-- home de imagen y primera vista -->

    <section id="home" class="imagen">
        <img src="/WAPBOOKS/public/img/5.jpg" alt="Biblioteca">
        <div class="texto-superpuesto">En Libros WAP creemos en el poder de los libros para transformar mentes, abrir
            mundos y conectar personas. Nuestra plataforma está diseñada para que amantes de la lectura puedan comprar,
            vender e intercambiar libros de manera fácil, segura y accesible.</div>
    </section>

    <!-- SECCION DE PRODUCTOS -->
    <section id="products" class="products-section">
    <div class="product-block">
        <img src="/WAPBOOKS /public/img/Nuevos.jpg" alt="Primera Mano">
        <h2>Libros de Primera Mano</h2>
        <p>Encuentra libros totalmente nuevos, en perfecto estado y directamente de editoriales o distribuidores.</p>
    </div>
    <div class="product-block">
        <img src="/WAPBOOKS/public/img/Segunda.jpg" alt="Segunda Mano">
        <h2>Libros de Segunda Mano</h2>
        <p>Explora una amplia variedad de libros usados en buen estado a precios accesibles.</p>
    </div>
</section>



    <!-- Categorias, seleccion de libros -->

    <section id="categories" class="categories">
        <h2>Categorías</h2>
        <div class="category-list">
            <div class="category-item">Ciencia Ficción<br><img src="/WAPBOOKS/public/img/ficcion.jpg" alt="">
            </div>
            <div class="category-item">Frases<br><img src="/WAPBOOKS/public/img/frases.jpg" alt=""></div>
            <div class="category-item">Teatro<br><img src="/WAPBOOKS/public/img/teatro.jpg" alt=""></div>
            <div class="category-item">Sátira<br><img src="/WAPBOOKS/public/img/satira.jpg" alt=""></div>
            <div class="category-item">Autobiografía<br><img src="/WAPBOOKS/public/img/auto.jpg" alt=""></div>
            <div class="category-item">Comedia<br><img src="/WAPBOOKS/public/img/comedia.jpg" alt=""></div>
            <div class="category-item">Literatura Fantástica<br><img src="/WAPBOOKS/public/img/fantastico.jpg"
                    alt=""></div>
        </div>
        </div>
    </section>

    <!-- Seccion de servicios que ofrecemos  -->
    <section id="services" class="services">
        <h2>Servicios</h2>

        <div class="services-container">
            <div class="service-card">
                <img src="/WAPBOOKS/public/img/compra.jpg" alt="Compra">
                <p class="service-text">COMPRA</p>
                <a href="#">Ir a comprar</a>
            </div>

            <div class="service-card">
                <img src="/WAPBOOKS/public/img/vende.jpg" alt="Vende">
                <p class="service-text">VENDE</p>
                <a href="#">Ir a vender</a>
            </div>

            <div class="service-card selected">
                <img src="/WAPBOOKS/public/img/Intercambia.jpg" alt="Intercambia">
                <p class="service-text">INTERCAMBIA</p>
                <a href="#">Ir a intercambiar</a>
            </div>
        </div>

        <p>
            En Libros WAP ofrecemos préstamos digitales, suscripciones mensuales para acceso ilimitado,
            recomendaciones personalizadas basadas en tus gustos, y una comunidad para compartir reseñas y opiniones.
        </p>
    </section>

    <!-- LIBROS DESTACADOS  -->

    <section id="featured-books" class="featured-books">
        <h2>Libros Destacados</h2>
        <div class="book-list">
            <div class="book-item">
                <img src="/WAPBOOKS/public/img/poca.jpg" alt="Libro 1">
                <p>Tan poca vida</p>
                <p>Hanya Yanagihara</p>
            </div>
            <div class="book-item">
                <img src="/WAPBOOKS/public/img/camus.jpg" alt="Libro 2">
                <p>La peste</p>
                <p>Albert Camus</p>
            </div>
            <div class="book-item">
                <img src="/WAPBOOKS/public/img/cien.jpg" alt="Libro 3">
                <p>Cien años de soledad</p>
                <p>Gabriel Garcia Marquez</p>
            </div>
            <div class="book-item">
                <img src="/WAPBOOKS/public/img/loco.jpg" alt="Libro 4">
                <p>La historia del loco</p>
                <p>John Katzenbach</p>
            </div>
            <div class="book-item">
                <img src="/WAPBOOKS/public/img/meters.jpg" alt="Libro 5">
                <p>A dos metros de ti</p>
                <p>Rachael Lippincot</p>
            </div>
        </div>
    </section>


    <!-- Seccion Contactanos -->

    <section id="contact" class="contact">
        <h2>Contáctenos</h2>
        <div class="contact-imgs">
            <img src="/WAPBOOKS/public/img/1.jpg" alt="Ilustración 1">
        </div>
        <div class="contact-desc">
            <p>Diseña conceptos para tu marca. Intercambia ideas con tu equipo y desarrolla el aspecto visual de tu
                marca. ¡Es un paso crucial en publicidad!</p>

            <div class="contact-box">
                <div class="barra barra1"></div>
                <div class="barra barra2"></div>
                <div class="barra barra3"></div>
                <div class="barra barra4"></div>
            </div>
            <p>LIBROSWAP@gmail.com</p>
        </div>
        <form>
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <textarea name="message" placeholder="Mensaje" rows="5" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- footer seccion ultima vista  -->

    <footer>
        <p>© 2025 Libros WAP. Todos los derechos reservados.</p>
    </footer>
</body>

</html>